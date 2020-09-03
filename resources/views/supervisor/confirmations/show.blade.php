@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center">
            <?php $counter = 0;
            $status = "" ?>
            @foreach($confirmations as $con)
            @if($con==$currentConfirmation) @php $status="active" @endphp @endif
            <li class="page-item {{$status}}"><a class="page-link" href="{{ route('supervisor.confirmations.show', $con->id)}}">{{++$counter}}</a></li>
            @php $status="" @endphp
            @endforeach
        </ul>
    </nav>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-8">
            @if($currentConfirmation->status==0 && $currentConfirmation->syllabus->stage==0)
            <div class="alert alert-danger" role="alert">
                Syllabus under construction !
            </div>
            @elseif($currentConfirmation->status==0 && $currentConfirmation->syllabus->stage==2)
            <div class="card">
                <div class="card-header text-center  " style="background-color:#F5F5F5;">
                    <h1><span class="badge badge-secondary">{{ $currentConfirmation->syllabus->title }}</span></h1>
                </div>
                <div class="card-body">
                    {!! $currentConfirmation->syllabus->syllabus !!}
                </div>
                <div class="card-footer  text-white" style="background-color: #F5F5F5;">
                    <div class="row justify-content-center">
                        <a type="button" class="btn btn-success" href="{{ route('supervisor.confirmations.confirm', $currentConfirmation->id)}}">Confirm</a>
                    </div>
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-header text-center  " style="background-color:#F5F5F5;">
                    <h1><span class="badge badge-secondary">{{ $currentConfirmation->syllabus->title }}</span></h1>
                </div>
                <div class="card-body">
                    @if($currentConfirmation->syllabus->stage==10)
                    <div class="alert alert-success text-center" role="alert">
                        <h3>Syllabus Online</h3>
                    </div>
                    @elseif($currentConfirmation->syllabus->stage==5)
                    <div class="alert alert-secondary text-center" role="alert">
                        <h3>Syllabus confirmed</h3>
                    </div>
                    @endif
                    {!! $currentConfirmation->syllabus->syllabus!!}
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-4">
            @if($currentConfirmation->status==0 && $currentConfirmation->syllabus->stage==2)
            <div id="CommentCard">
                <div class="card" style="position: fixed; text-align: center ">
                    <div class="card-header text-center  " style="background-color:#F5F5F5;">
                        <h1><span class="badge badge-danger">Comments</span></h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('supervisor.confirmations.refuse', $currentConfirmation->id)}}" method="Post" class="float-left">
                            @csrf
                            <textarea name="comments" id="comments" cols="40" rows="10"></textarea>
                    </div>
                        <button type="submit" class="btn btn-danger">refuse</button>
                        <br>
                    </form>
                </div>
            </div>

            @elseif($currentConfirmation->status==-1)
            <div class="card" style="position: fixed;">

                <div class="card-header text-white" style="background-color: #eb7175; text-align: center">
                    <h3>Comments</h3>
                </div>
                <div class="card-body">
                    {{$currentConfirmation->comments}}
                </div>
            </div>
            @endif
        </div>
    </div>

</div>


@endsection