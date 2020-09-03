@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="row justify-content-center">
                <a type="button" class="btn btn-success btn-lg" href="{{ route('home.syllabus.download', $syllabus->id)}}">Download PDF</a>
            </div>
            <div class="card mt-2">

                <div class="card-header text-center  " style="background-color:#F5F5F5;">
                    <h1><span class="badge badge-primary">{{$syllabus->title}}</span></h1>
                </div>
                <div class="card-body">
                    {!! $syllabus->syllabus!!}
                </div>
            </div>

        </div>

    </div>

</div>


@endsection