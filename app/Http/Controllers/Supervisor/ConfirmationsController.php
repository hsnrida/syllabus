<?php

namespace App\Http\Controllers\Supervisor;

use App\Confirmation;
use App\Course;
use App\Http\Controllers\Controller;
use App\Syllabus;
use App\Validation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConfirmationsController extends Controller
{
    
    
    // Confirmation controller for supervisor responsible for all confirmation 
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:supervisor');
    }
    public function index()
    {
        $confirmations = $this->getLatestVersions();
        return view('supervisor.confirmations.index')->with('confirmations', $confirmations);
    }
    public function show(Confirmation $confirmation)
    {
        $confirmations=$this->getAllConfirmationVersions($confirmation);
        return view('supervisor.confirmations.show')->with([
            'currentConfirmation' => $confirmation,
            'confirmations' => $confirmations
        ]);
    }
    public function edit(Confirmation $confirmation)
    {
        //
    }
    public function confirm(Confirmation $confirmation)
    {
        $confirmation->status = 1;
        $confirmation->save();
        $confirmation->syllabus->stage = 5;
        $confirmation->syllabus->save();

        $validation=$confirmation->syllabus->validation;
        $validation->status=2;
        $validation->save();
        return $this->index();
    }
    public function refuse(Request $request, Confirmation $confirmation)
    {
        
        $confirmation->status = -1;
        $confirmation->comments = $request->comments;

        $confirmation->save();
        $confirmation->syllabus->stage = -3;
        $confirmation->syllabus->save();

        $oldValidation=$confirmation->syllabus->validation;
        $oldValidation->status=-2;
        $oldValidation->save();

        $syllabus = new Syllabus();
        $syllabus = $confirmation->syllabus->replicate();
        $syllabus->stage = -4;
        $syllabus->save();

        $validation = new Validation();
        $validation->user_id = $oldValidation->user_id;
        $validation->syllabus_id = $syllabus->id;
        $oldValidation->status=0;
        $validation->save();
 
 
        return $this->index();
    }



    // eloquent ORM database queries 

    // get all courses of the department
    public function getAllCourses()
    {
        $user = Auth::user();
        $courseSyllabus = $user->department->courses;
        return $courseSyllabus;
    }
    //get all the versions of a specific validation of a user in this year 
    public function getAllConfirmationVersions(Confirmation $confirmation)
    {
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $allConfirmations = Confirmation::whereYear('created_at', $currentYear)
            ->where('user_id', $user->id)
            ->get();

        $confirmations = $allConfirmations->filter(function ($value) use ($confirmation){
            return $value->syllabus->course_id ==$confirmation->syllabus->course_id;
        });
 
        return $confirmations;
    }
    //get a group of validations with all its versions
    public function getAllConfirmations()
    {
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $allConfirmations = Confirmation::whereYear('created_at', $currentYear)
            ->where('user_id', $user->id)
            ->get();

        $confirmations = $allConfirmations->groupBy(function ($item) {
            return $item->syllabus->course_id;
        });
        return $confirmations;
    }
    //get a collection of latestversions of all validations
    public function getLatestVersions()
    {
        $confirmations = $this->getAllConfirmations();
        $lastVersions = Collect();
        foreach ($confirmations as $c) {
            $lastVersions->add($c->last());
        }
        return $lastVersions;
    }
}
