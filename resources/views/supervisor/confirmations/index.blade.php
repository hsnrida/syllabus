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
        @foreach ($confirmations as $confirmation)
        <div class="d-flex w-100 justify-content-between">
            <a href="{{ route('supervisor.confirmations.show', $confirmation->id)}}" class=" list-group-item list-group-item-action  list-group-item-primary flex-column align-items-start ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$confirmation->syllabus->title}}</h5>
                        <small>Builder:{{$confirmation->syllabus->user->name}}</small>
                    </div>
                    <p class="mb-1">{{$confirmation->syllabus->course->description}}</p>
                </a>
        </div> 
        @endforeach
    </ul>
</div>
@endsection