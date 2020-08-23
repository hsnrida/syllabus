<?php

namespace App\Http\Controllers\Validator;

use App\Confirmation;
use App\Http\Controllers\Controller;
use App\Validation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Syllabus;



class ValidationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:validator');
    }
    public function index()
    {
        $validations=$this->getLatestVersions();
        return view('validator.syllabi.index')->with('validations', $validations);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(int $validation)
    {
        $validation = Validation::find($validation);
        $validations = $this->getAllValidationVersions($validation);
        return view('validator.syllabi.show')->with([
            'currentValidation' => $validation,
            'validations' => $validations
        ]);
    }
    public function confirm(int $validation)
    {
        $validation = Validation::find($validation);
        $validation->status = 1;
        $validation->date = Carbon::now();
        $validation->time = Carbon::now();
        $validation->save();
        $validation->syllabus->stage = 2;
        $validation->syllabus->save();
        return $this->index();
    }
    public function refuse(Request $request, int $validation)
    {
        $validation = Validation::find($validation);
        $newValidation = $validation->replicate();
        $validation->status = -1;
        $validation->comments = $request->comments;
        $validation->date = Carbon::now();
        $validation->time = Carbon::now();
        $validation->save();
        $validation->syllabus->stage = -1;
        $validation->syllabus->save();

        $syllabus = new Syllabus;
        $syllabus = $validation->syllabus->replicate();
        $syllabus->stage = -2;
        $syllabus->save();
        $newValidation->syllabus_id = $syllabus->id;
        $newValidation->save();

        // $validation = new Validation;
        // $validation->user_id = $validators[$counter];
        // $validation->syllabus_id = $syllabus->id;
        // $validation->save();
        return $this->index();
    }


    public function edit(int $validation)
    {
    }


    public function update(Request $request, Validation $validation)
    {
        //
    }


    //get all the versions of a specific validation of a user in this year 
    public function getAllValidationVersions(Validation $validation)
    {
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $allValidations = Validation::whereYear('created_at', $currentYear)
            ->where('user_id', $user->id)
            ->get();

        $validations = collect();
        foreach ($allValidations as $val) {
            if ($val->syllabus->course_id == $validation->syllabus->course_id) {
                $validations->add($val);
            }
        }
        return $validations;
    }

    //get a group of validations with all its versions
    public function getAllValidations()
    {
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $allValidations = Validation::whereYear('created_at', $currentYear)
            ->where('user_id', $user->id)
            ->get();

        $validations=$allValidations->groupBy(function ($item) {
            return $item->syllabus->course_id;
        });
        return $validations;
    }
    //get a collection of latestversions of all validations
    public function getLatestVersions()
    {
        $validations = $this->getAllValidations();
        $lastVersions = Collect();
        foreach ($validations as $v) {
            $lastVersions->add($v->last());
        }
        return $lastVersions;
    }
}
