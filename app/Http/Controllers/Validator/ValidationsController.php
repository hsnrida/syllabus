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
        $user = Auth::user();
        $firstValidations = $user->validations;
        $validations = collect();
        foreach ($firstValidations as $val) {
            if ($val->status != -1) {
                $validations->add($val);
            }
        }
        return view('validator.syllabi.index')->with('validations', $validations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function show(int $validation)
    {
        $validation = Validation::find($validation);
        return view('validator.syllabi.show')->with('validation', $validation);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function edit(int $validation)
    {
        $user = Auth::user();
        $validation = Validation::find($validation);
        $allvalidations = $user->validations;
        $validations = collect();
        foreach ($allvalidations as $val) {
            if ($val->syllabus->course_id == $validation->syllabus->course_id) {
                $validations->add($val);
            }
        }
        // $validations->pop();
        return view('validator.syllabi.edit')->with([
            'validation' => $validation,
            'validations' => $validations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Validation $validation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Validation $validation)
    {
        //
    }
}
