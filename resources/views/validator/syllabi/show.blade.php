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
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            @if($currentValidation->status==0 && $currentValidation->syllabus->stage==0)
            <div class="alert alert-danger" role="alert">
                Syllabus under construction !
            </div>
            @elseif($currentValidation->status==0 && $currentValidation->syllabus->stage==1)
            <div class="card">
                <div class="card-header">Syllabus</div>
                <div class="card-body">
                    {!! $currentValidation->syllabus->syllabus !!}
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-success" href="{{ route('validator.syllabi.confirm', $currentValidation->id)}}">Confirm</a>
                    <button id="refuse" type="button" class="btn btn-danger">Refuse</button>
                </div><br>
            </div>
            @else
            <div class="card">
                <div class="card-header">Syllabus</div>
                <div class="card-body">
                    {!! $currentValidation->syllabus->syllabus!!}
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-4">
            @if($currentValidation->status==0 && $currentValidation->syllabus->stage==1)
            <div id="CommentCard">
                <div class="card">
                    <div class="card-header">Comments</div>
                    <div class="card-body">
                        <form action="{{ route('validator.syllabi.refuse', $currentValidation->id)}}" method="Post" class="float-left">
                            @csrf
                            <textarea name="comments" id="comments" cols="40" rows="10"></textarea>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="submit" class="btn btn-danger">comment and refuse</button>
                    </div><br>
                    </form>
                </div>
            </div>
            @elseif($currentValidation->status==1)
            <div class="alert alert-success" role="alert">
                Syllabus confirmed
            </div>
            @elseif($currentValidation->status==-1)
            <div class="card">

                <div class="card-header">Comments</div>
                <div class="card-body">
                    {{$currentValidation->comments}}
                </div>
            </div>
            @endif
        </div>
    </div>

</div>
<script>
    $("#CommentCard").hide();
    $(document).ready(function() {
        $("#refuse").click(function() {
            $("#CommentCard").toggle();
        });

    });
</script>
@endsection