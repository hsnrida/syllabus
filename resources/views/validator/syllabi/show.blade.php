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
                <div class="card-header text-center  " style="background-color:#F5F5F5;">
                    <h1><span class="badge badge-secondary">{{ $currentValidation->syllabus->title }}</span></h1>
                </div>
                <div class="card-body">
                    {!! $currentValidation->syllabus->syllabus !!}
                </div>
                <div class="card-footer  text-white" style="background-color: #F5F5F5;">
                    <div class="row justify-content-center">
                        <a type="button" class="btn btn-success" href="{{ route('validator.syllabi.confirm', $currentValidation->id)}}">Confirm</a>
                    </div>
                </div>
            </div>
            @else
            <div class="card ">
                <div class="card-header text-center  " style="background-color:#F5F5F5;">
                    <h1><span class="badge badge-secondary">{{ $currentValidation->syllabus->title }}</span></h1>
                </div>
                <div class="card-body">
                    @if($currentValidation->status==1 )
                    <div class="alert alert-secondary text-center" role="alert">
                        <h3>Syllabus confirmed</h3>
                    </div>
                    @elseif($currentValidation->status==2)
                    @if($currentValidation->syllabus->stage==10)
                    <div class="alert alert-success text-center" role="alert">
                        <h3>Syllabus is online!</h3>
                    </div>
                    @else
                    <div class="alert alert-success text-center" role="alert">
                        <h3>Syllabus confirmed by supervisor!</h3>
                    </div>
                    @endif
                    @endif
                    {!! $currentValidation->syllabus->syllabus!!}
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-3 ">
            @if($currentValidation->status==0 && $currentValidation->syllabus->stage==1)
            <div class="card" style="position: fixed; background-color:#F5F5F5;">
                <div class="card-header text-center  " style="background-color:#F5F5F5;">
                    <h1><span class="badge badge-danger">Comments</span></h1>
                </div>
                <div class="card-body text-center">
                    <form action="{{ route('validator.syllabi.refuse', $currentValidation->id)}}" method="Post">
                        @csrf
                        <textarea name="comments" id="comments" style="width:100%;" rows="15"></textarea>
                        <button type="submit" class="btn btn-danger">refuse</button>
                    </form>
                </div>
            </div>
            @elseif($currentValidation->status==-1)
            <div class="card" style="position: fixed; overflow:visible; width:20%">

                <div class="card-header text-white text-center" style="background-color: #eb7175;">
                    <h3> Comments </h3>
                </div>
                <div class="card-body">
                    {{$currentValidation->comments}}
                </div>
            </div>
            @elseif($currentValidation->status==-2)
            <div class="card" style="position: fixed;">

                <div class="card-header text-white text-center" style="background-color: #eb7175;">
                    <h3>Supervisor Comments</h3>
                </div>
                <div class="card-body">
                    {{$currentValidation->syllabus->confirmation->comments}}
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>

</div>

</div>

@endsection