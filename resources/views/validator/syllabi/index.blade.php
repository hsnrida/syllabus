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
        @foreach ($validations as $validation)
        <div class="d-flex w-100 justify-content-between">
            @if($validation->syllabus->stage==1)
            <a href="{{ route('validator.syllabi.show', $validation->id)}}" class="list-group-item list-group-item-action  list-group-item-primary flex-column align-items-start ">
                @elseif($validation->syllabus->stage==2)
                <a href="{{ route('validator.syllabi.show', $validation->id)}}" class="  list-group-item list-group-item-action  list-group-item-warning flex-column align-items-start ">
                    @elseif($validation->syllabus->stage==0)
                    <a href="{{ route('validator.syllabi.show', $validation->id)}}" class="  list-group-item list-group-item-action  list-group-item-secondary flex-column align-items-start ">
                        @elseif($validation->syllabus->stage < 0) <a href="{{ route('validator.syllabi.show', $validation->id)}}" class="  list-group-item list-group-item-action  list-group-item-danger flex-column align-items-start ">
                            @elseif($validation->syllabus->stage == 5)
                            <a href="{{ route('validator.syllabi.show', $validation->id)}}" class="  list-group-item list-group-item-action  list-group-item-success flex-column align-items-start ">
                                @elseif($validation->syllabus->stage == 10)
                                <a href="{{ route('validator.syllabi.show', $validation->id)}}" class="  list-group-item list-group-item-action  list-group-item-light flex-column align-items-start ">

                                    @endif
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$validation->syllabus->title}}</h5>
                                        <small>Builder:{{$validation->syllabus->user->name}}</small>
                                    </div>
                                    <p class="mb-1">{{$validation->syllabus->course->description}}</p>
                                </a>

        </div>

        @endforeach
    </ul>
</div>
@endsection