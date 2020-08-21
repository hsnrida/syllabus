@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($validation->syllabus->stage==0)

        <div class="alert alert-danger" role="alert">
            Syllabus under construction !
        </div>

        @else
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Syllabus</div>
                <div class="card-body">
                    {!! $validation->syllabus->syllabus!!}
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            @if($validation->status==1)
            <div class="alert alert-success" role="alert">
                Syllabus confirmed
            </div>
            @else

            <div class="card">

                <div class="card-header">Comments</div>
                <div class="card-body">
                    {{$validation->comments}}
                </div>
            </div>
            @endif
        </div>
        @endif

    </div>
</div>
@endsection