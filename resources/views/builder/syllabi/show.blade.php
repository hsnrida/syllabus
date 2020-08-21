@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($syllabus->stage !=-2)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Syllabus</div>
                <div class="card-body">
                    {!! $syllabus->syllabus!!}
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    {{$syllabus->validation->comments}}
                </div>
            </div>
        </div>
        @else
        <?php
        $user = Illuminate\Support\Facades\Auth::user();
        $syllabi = $user->syllabi->where('course_id', $syllabus->course_id);
        $newSyllabus = $syllabi->pop();
        $syllabus = $syllabi->pop();
        ?>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Syllabus</div>
                <div class="card-body">
                    {!! $syllabus->syllabus!!}
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    {{$syllabus->validation->comments}}
                </div>
                <div class="card-footer text-muted">
                    <a type="button" class="btn btn-success" href="{{ route('builder.syllabi.retry', $newSyllabus->id)}}">Retry</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection