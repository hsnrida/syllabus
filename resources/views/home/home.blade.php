@extends('layouts.app')

@section('content')

<head>
    <link href="{{ asset('css/syllabus-grid.css') }}" rel="stylesheet">
</head>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-lg justify-content-center">
                    <?php $status = "" ?>
                    @foreach($allYearsSyllabi as $year => $syllabi)
                    @if($syllabi==$currentSyllabi) @php $status="active" @endphp @endif
                    <li class="page-item {{$status}} "><a class="page-link " href="{{ route('home', $year)}}">{{$year}}/{{$year+1}}</a></li>
                    @php $status="" @endphp
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="col-md-12">

            <div class="container">
                <div class="row  row-lg">
                    @foreach($currentSyllabi as $syllabus)
                    <div class="col-sm-4 "  >
                        <a type="button" href="{{route('home.show', $syllabus->id)}}" class="item"  >
                                <h2 class="mb-1"><b>{{$syllabus->title}}</b></h5>
                                <small>Code:{{$syllabus->code}}</small>
                                <h5>{{$syllabus->created_at->format('Y/m/d')}}</h5>
                                <small>Auther:{{$syllabus->user->name}}</small>

                                <p class="mb-1">{{$syllabus->course->description}}</p>

                        </a>
                    </div>
                    @endforeach
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection