<?php

namespace App\Http\Controllers\Builder;

use App\Http\Controllers\Controller;
use App\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Int_;
use Ramsey\Uuid\Type\Integer;

class SyllabiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:builder');
    }
    public function index()
    {
        $user=Auth::user();
        $syllabi=$user->syllabi->where('stage','!=',-1);
        return view('builder.syllabi.index')->with('syllabi',$syllabi);
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
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function show(Syllabus $syllabus)
    {
        return view('builder.syllabi.show')->with('syllabus',$syllabus);
    }

    public function retry(Syllabus $syllabus)
    {
        $syllabus->stage=0;
        $syllabus->save();
        return $this->edit($syllabus);
    }
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function edit(Syllabus $syllabus)
    {
        $user=Auth::user();
        $syllabi=$user->syllabi->where('course_id',$syllabus->course_id);
        $lastSyllabus=$syllabi->pop();
        return view('builder.syllabi.edit')->with([
            'syllabi'=>$syllabi,
            'lastSyllabus'=>$lastSyllabus
            ]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syllabus $syllabus)
    {
        $syllabus->syllabus=$request->syllabusText;
        if($request->input('action')=='submit'){
            $syllabus->stage=1;
            $syllabus->save();
        }
    
       if( $syllabus->save())
       {
              $request->session()->flash('success',$syllabus->title .'  has been updated');
               
       }
       else {
              $request->session()->flash('error','There was an error updating the syllabus');
       }

        return redirect()->route('builder.syllabi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syllabus $syllabus)
    {
        //
    }
}
