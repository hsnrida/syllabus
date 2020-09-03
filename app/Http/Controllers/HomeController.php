<?php

namespace App\Http\Controllers;

use App\Syllabus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($year = null)
    {
        $allYearsSyllabi = $this->departmentSyllabus();
        if ($year) {
            $currentSyllabi = $allYearsSyllabi[$year];
        } else {
            $currentSyllabi = $allYearsSyllabi->last();
        }
        return view('home.home')->with([
            'allYearsSyllabi' => $allYearsSyllabi,
            'currentSyllabi' => $currentSyllabi
        ]);
    }

    public function download(Syllabus $syllabus)
    {
        $syllabusdoc=$syllabus->syllabus;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($syllabusdoc);
        return $pdf->download($syllabus->title.'_syllabus.pdf');
    }
    
    public function show(Syllabus $syllabus)
    {
        return view('home.show')->with('syllabus', $syllabus);
    }

    public function departmentSyllabus()
    {
        $user = Auth::user();
        $department = $user->department;
        $syllabi = $department->syllabi->whereIn('stage', [10,5])
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->format('Y');
            });
        return $syllabi;
    }
}
