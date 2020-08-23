@extends('layouts.app')

@section('content')

<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <ul class="list-group">
        @foreach ($syllabi as $syllabus)
        <div class="d-flex w-100 justify-content-between ">
            @if($syllabus->stage==0)
            <a href="{{ route('builder.syllabi.show', $syllabus->id)}}" class="list-group-item list-group-item-action  list-group-item-primary flex-column align-items-start ">
                @elseif($syllabus->stage==1)
                <a href="{{ route('builder.syllabi.show', $syllabus->id)}}" class="list-group-item list-group-item-action  list-group-item-warning flex-column align-items-start ">
                    @elseif($syllabus->stage==2)
                    <a href="{{ route('builder.syllabi.show', $syllabus->id)}}" class="list-group-item list-group-item-action  list-group-item-success flex-column align-items-start ">
                        @elseif($syllabus->stage==-2)
                        <a href="{{ route('builder.syllabi.show', $syllabus->id)}}" class="list-group-item list-group-item-action  list-group-item-danger flex-column align-items-start ">
                            @endif
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$syllabus->title}}</h5>
                                <small>{{$syllabus->created_at}}</small>
                            </div>
                            <p class="mb-1">{{$syllabus->course->description}}</p>
                            <small>credits:{{$syllabus->course->credits}}</small>
                        </a>

        </div>
        <br>
        @endforeach
    </ul>
</div>
@endsection