@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="row justify-content-center">
                <a type="button" class="btn btn-success btn-lg" href="{{ route('home.syllabus.download', $syllabus->id)}}">Download PDF</a>
            </div>
            <div class="card mt-2">

                <div class="card-header text-white" style="background-color: #eb7175; text-align: center">
                    <h3>{{ $syllabus->title }} syllabus </h3>
                </div>
                <div class="card-body">
                    {!! $syllabus->syllabus!!}
                </div>
            </div>

        </div>

    </div>

</div>


@endsection