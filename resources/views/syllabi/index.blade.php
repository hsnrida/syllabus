@extends('layouts.app')

@section('content')

<head>
    <link href="{{ asset('css/dropdown.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/dropdown.js') }}"></script>

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">

            <body>
                @foreach($universities as $university)
                <div class="dropdown mt-3">
                    <button class="btn btn-primary btn-lg btn-block dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h3> {{ $university->name}} </h3>
                    </button>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                         <a  class="dropdown-item" type="button" data-toggle="modal" data-target="#id{{$university->id}}">Information</a>
                        <li class="dropdown-divider"></li>
                        @foreach($university->faculties as $faculty)
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" tabindex="-1" href="#">{{$faculty->name}}</a>
                            <ul class="dropdown-menu">
                                @foreach($faculty->departments as $department)
                                <a class="dropdown-item" href="{{route('universities.department' , $department->id)}}">{{$department->name}}</a> 
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>


                <div class="modal fade bd-example-modal-lg" id="id{{$university->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$university->id}}label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h1 class="modal-title " id="id{{$university->id}}">{{$university->name}}</h1>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body justify-content-center">
                                <p></p>
                                @foreach($university->faculties as $faculty)
                                <h4 >{{$faculty->name}}<small class="float-right">{{$faculty->description}}</small></h4> <hr>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </body>

            </html>

        </div>
    </div>
</div>
@endsection