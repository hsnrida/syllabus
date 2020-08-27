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
    @if(!count($confirmations))
    <div class="alert alert-primary" role="alert" style="text-align: center">
        
        <h1><span class="badge badge-secondary">Syllabi under construction</span></h1>
    </div>
    @else
    <ul class="list-group">
        @foreach ($confirmations as $confirmation)
        <div class="d-flex w-100 justify-content-between">
            @if($confirmation->status==0)
            <a href="{{ route('supervisor.confirmations.show', $confirmation->id)}}" class=" list-group-item list-group-item-action  list-group-item-primary flex-column align-items-start ">
                @elseif($confirmation->status==-1)
                <a href="{{ route('supervisor.confirmations.show', $confirmation->id)}}" class=" list-group-item list-group-item-action  list-group-item-danger flex-column align-items-start ">
                    @elseif($confirmation->status==1)
                    <a href="{{ route('supervisor.confirmations.show', $confirmation->id)}}" class=" list-group-item list-group-item-action  list-group-item-success flex-column align-items-start ">
                        @endif
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$confirmation->syllabus->title}}</h5>
                            <small>Builder:{{$confirmation->syllabus->user->name}}</small>
                        </div>
                        <p class="mb-1">{{$confirmation->syllabus->course->description}}</p>
                    </a>
        </div>
        @endforeach
    </ul>
    @endif
</div>
@endsection