<?php

namespace App\Http\Controllers\Supervisor;


use App\User;
use App\Role;
use App\Course;
use App\Syllabus;
use App\Validation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class DistributeCoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:supervisor');
    }
    public function index()
    {
        $user = Auth::user();
        $department = $user->department;
        $courses = $department->courses;

        $syllabi = $department->syllabi;
        if (count($syllabi)) {
            $date = $syllabi[0]->created_at;
            $date = new Carbon($date);
            $mytime = Carbon::now();
            if ($mytime->year == $date->year) {
                dd("courses have been distributed");
            }
        }

        $builders = $department->users()->whereHas("roles", function ($q) {
            $q->where("name", "builder");
        })->get();
        $validators = $department->users()->whereHas("roles", function ($q) {
            $q->where("name", "validator");
        })->get();


        return view('supervisor.courses.index')->with([
            'courses' => $courses,
            'builders' => $builders,
            'validators' => $validators
        ]);
    }
    public function distribute(Request $request)
    {
        $counter = 0;
        $builders = $request->selectBuilder;
        $validators = $request->selectValidator;
        $courseSize = count($validators);
        for ($i = 0; $i < $courseSize; $i++) {
            if ($builders[$i] == 'Choose...' || $validators[$i] == 'Choose...') {
                session()->flash('msg', 'Please choose all the instructers!');
                return redirect()->back()->withInput();
            }
            if ($builders[$i] == $validators[$i]) {
                session()->flash('msg', 'the builder and validator of a course must be different!');
                return redirect()->back();
            }
        }
        $coursesId = $request->course;
        foreach ($coursesId as $courseId) {
            $course = Course::find($courseId);
            $syllabus = new Syllabus;
            $syllabus->title = $course->title;
            $syllabus->course_id = $courseId;
            $syllabus->user_id = $builders[$counter];
            $syllabus->department_id = $course->department_id;
            $syllabus->save();

            $validation = new Validation;
            $validation->user_id = $validators[$counter];
            $validation->syllabus_id = $syllabus->id;
            $validation->save();

            $counter++;
        }
    }
}
