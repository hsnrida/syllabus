<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Syllabus;
use App\University;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class SyllabiController extends Controller
{
    public function index()
    {
        $universities = $this->getUniversities();
        return view('syllabi.index')->with('universities', $universities);
    }
    public function department(Department $department)
    {
        $syllabi=$this->getDepartmentSyllabi($department);
        return view('syllabi.department')->with('syllabi', $syllabi);
    }

    public function show(Syllabus $syllabus)
    {
        return view('syllabi.show')->with('syllabus', $syllabus);
    }

    public function download(Syllabus $syllabus)
    {
        $syllabusdoc=$syllabus->syllabus;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($syllabusdoc);
        return $pdf->download($syllabus->title.'_syllabus.pdf');
    }

    public function getUniversities()
    {
        $universities = University::all();
        return $universities;
    }
    public function getDepartmentSyllabi($department)
    {
        $currentYear = Carbon::now()->year;
        $syllabi=Syllabus::whereYear('created_at', $currentYear)
        ->where('stage', 10)
        ->where('department_id',$department->id)->get();

        return $syllabi;
    }
}
