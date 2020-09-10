<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Syllabus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SyllabiController extends Controller
{

    // Builder role controller responsible for builder, viewing and modifing syllabus

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:builder');
    }
    public function index()
    {
        $user = Auth::user();
        $syllabi = $this->getLatestVersions();
        return view('builder.syllabi.index')->with('syllabi', $syllabi);
    }

    public function retry(Syllabus $syllabus)
    {
        $syllabus->stage = 0;
        $syllabus->save();
        return $this->show($syllabus);
    }


    public function show(Syllabus $syllabus)
    {
        $templates=DB::table('templates')->get();
        $syllabi = $this->getAllSyllabusVersions($syllabus);
        return view('builder.syllabi.show')->with([
            'syllabi' => $syllabi,
            'currentSyllabus' => $syllabus,
            'templates'=>$templates
        ]);
    }
    public function storeTemplate(Request $request, Syllabus $syllabus)
    {
        $syllabus->syllabus=$request->template;
        $syllabus->save();
        return back();
    }

    public function update(Request $request, Syllabus $syllabus)
    {
        $syllabus->syllabus = $request->syllabusText;
        $message = " has been saved";
        if ($request->input('action') == 'submit') {
            $syllabus->stage = 1;
            $syllabus->save();
            $message = " has been submitted";
        }

        if ($syllabus->save()) {
            $request->session()->flash('success', $syllabus->title . $message);
        } else {
            $request->session()->flash('error', 'There was an error updating the syllabus');
        }

        return redirect()->route('builder.syllabi.index');
    }


    //get all the versions of a specific syllabus of a user in this year 
    public function getAllSyllabusVersions(Syllabus $syllabus)
    {

        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $syllabi = Syllabus::whereYear('created_at', $currentYear)
            ->where('user_id', $user->id)
            ->where('course_id', $syllabus->course_id)
            ->get();
        return $syllabi;
    }
    //get a group of syllabi with all its versions
    public function getAllSyllabi()
    {
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $syllabi = Syllabus::whereYear('created_at', $currentYear)
            ->where('user_id', $user->id)
            ->get()
            ->groupBy('course_id');
        return $syllabi;
    }
    //get a collection of latestversions of all syllabi
    public function getLatestVersions()
    {
        $syllabi = $this->getAllSyllabi();
        $lastVersions = Collect();
        foreach ($syllabi as $s) {
            $lastVersions->add($s->last());
        }
        return $lastVersions;
    }
}
