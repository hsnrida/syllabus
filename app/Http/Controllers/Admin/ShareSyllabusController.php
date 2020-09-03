<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Syllabus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShareSyllabusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syllabi = $this->getConfirmedSyllabus();
        return view('admin.syllabi.index')->with('syllabi', $syllabi);
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
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function show(Syllabus $syllabus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function edit(Syllabus $syllabus)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syllabus $syllabus)
    {
        if ($request->input('share') == 'online') {
            $syllabus->stage = 10;
        } else {
            $syllabus->stage = 5;
        }
        $syllabus->save();
        return redirect()->back();
    }

    public function getConfirmedSyllabus()
    {
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $confirmedSyllabus = Syllabus::whereYear('created_at', $currentYear)
            ->where('department_id', $user->department_id)
            ->whereIn('stage', [5, 10])
            ->get();

        return $confirmedSyllabus;
    }
}
