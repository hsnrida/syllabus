@extends('layouts.app')

@section('content')

<head>
    <link href="{{ asset('css/syllabus-grid.css') }}" rel="stylesheet">
</head>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(!count($syllabi))
                <div class="alert alert-info text-center" role="alert">
                    <h2>No Available Syllabi</h2>
                </div>
            @else
            <div class="container">
                <div class="row  row-lg">
                    @foreach($syllabi as $syllabus)
                    <div class="col-sm-4 ">
                        <a type="button" href="{{route('universities.syllabus.show', $syllabus->id)}}" class="item">
                            <h2 class="mb-1"><b>{{$syllabus->title}}</b></h5>
                                <small>Code:{{$syllabus->code}}</small>
                                <h5>{{$syllabus->created_at->format('Y/m/d')}}</h5>
                                <small>Auther:{{$syllabus->user->name}}</small>
                                <p class="mb-1">{{$syllabus->course->description}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection