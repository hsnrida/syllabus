@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center">
            <?php $counter = 0;
            $status = "" ?>
            @foreach($validations as $val)
            @if($val==$currentValidation) @php $status="active" @endphp @endif
            <li class="page-item {{$status}}"><a class="page-link" href="{{ route('validator.syllabi.show', $val->id)}}">{{++$counter}}</a></li>
            @php $status="" @endphp
            @endforeach
        </ul>
    </nav>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        @if($currentValidation->status==0 && ($currentValidation->syllabus->stage==0 || $currentValidation->syllabus->stage==-2 || $currentValidation->syllabus->stage==-4))
        <div class="alert alert-info" role="alert">
            Syllabus under construction !!
        </div>
        @else
        <div class="col-md-9 ">
            @if($currentValidation->status==0 && $currentValidation->syllabus->stage==1)
            <div class="card">
                <div class="card-header text-white" style="background-color: #00AA9E;">
                    <h3>{{ $currentValidation->syllabus->title }} syllabus</h3>
                </div>
                <div class="card-body">
                    {!! $currentValidation->syllabus->syllabus !!}
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-success" href="{{ route('validator.syllabi.confirm', $currentValidation->id)}}">Confirm</a>
                </div><br>
            </div>
            @else
            <div class="card">
                <div class="card-header text-white" style="background-color: #eb7175;">
                    <h3>{{ $currentValidation->syllabus->title }} syllabus</h3>
                </div>
                <div class="card-body">
                    {!! $currentValidation->syllabus->syllabus!!}
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-3 ">
            @if($currentValidation->status==0 && $currentValidation->syllabus->stage==1)
            <div class="card" style="position: fixed; ">
                <div class="card-header text-white" style="background-color: #00AA9E;">
                    <h3>Comments</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('validator.syllabi.refuse', $currentValidation->id)}}" method="Post">
                        @csrf
                        <textarea name="comments" id="comments" style="width:100%;" rows="15"></textarea>
                        <button type="submit" class="btn btn-danger">comment and refuse</button>
                    </form>
                </div>
            </div>
            @elseif($currentValidation->status==1 )
            <div class="alert alert-secondary" style="position: fixed; " role="alert">
                Syllabus confirmed
            </div>
            @elseif($currentValidation->status==-1)
            <div class="card" style="position: fixed;overflow:scroll; height:70%">

                <div class="card-header text-white" style="background-color: #eb7175;">
                    <h3>Comments</h3>
                </div>
                <div class="card-body">
                    {{$currentValidation->comments}}
                </div>
            </div>
            @elseif($currentValidation->status==-2)
            <div class="card" style="position: fixed;">

                <div class="card-header text-white" style="background-color: #eb7175;">
                    <h3>Supervisor Comments</h3>
                </div>
                <div class="card-body">
                    {{$currentValidation->syllabus->confirmation->comments}}
                </div>
            </div>
            @elseif($currentValidation->status==2)
            @if($currentValidation->syllabus->stage==10)
            <div class="alert alert-success" style="position: fixed;" role="alert">
                Syllabus is online!
            </div>
            @else
            <div class="alert alert-success" style="position: fixed;" role="alert">
                Syllabus confirmed by supervisor!
            </div>
            @endif
            @endif
        </div>
        @endif
    </div>

</div>

</div>

@endsection