@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-center">
                        <?php $counter = 0 ?>
                        @foreach($validations as $val)
                        <li class="page-item"><a class="page-link" href="{{ route('validator.syllabi.show', $val->id)}}">{{++$counter}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <br><br>
            @if($validation->syllabus->stage==1)
            <div class="card">
                <div class="card-header">Syllabus</div>
                <div class="card-body">
                    {!! $validation->syllabus->syllabus !!}
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-success" href="{{ route('validator.syllabi.confirm', $validation->id)}}">Confirm</a>
                    <button id="refuse" type="button" class="btn btn-danger">Refuse</button>
                </div><br>

            </div>

        </div>
        <div class="col-md-4 refuse" id="CommentCard">
            <br><br>
            <div class="card">
                <div class="card-header">Comments</div>
                <div class="card-body">
                    <form action="{{ route('validator.syllabi.refuse', $validation->id)}}" method="Post" class="float-left">
                        @csrf
                        <textarea name="comments" id="comments" cols="40" rows="10"></textarea>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-danger">comment and refuse</button>
                </div><br>
                </form>
            </div>
        </div>
        @endif
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