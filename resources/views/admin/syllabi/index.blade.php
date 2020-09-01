@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>

            </div><br><br>
            <div class="card">

                <div class="card-header text-white " style="background-color:slategrey ; text-align:center">
                    <h4>Confirmed Syllabi</h4>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark " style="text-align: center ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Builder</th>
                                <th scope="col">Validator</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            <?php $counter = 1 ?>
                            @foreach ($syllabi as $syllabus)
                            <tr>
                                <th scope="row">{{$counter++}}</th>
                                <td>{{$syllabus->title}}</td>
                                <td> {{$syllabus->user->name}}</td>
                                <td> {{$syllabus->validation->user->name}}</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-primary  mr-2" data-toggle="modal" data-target="#id{{$syllabus->id}}">View</button>
                                        @if($syllabus->stage==5)
                                        <form action="{{route ('admin.syllabi.edit',$syllabus->id)}}" method="get" class=" ">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">offline</button>
                                        </form>
                                        @else
                                        <button type="submit" class="disabled btn btn-success">online !</button>
                                        @endif
                                    </div>
                                    <div class="modal fade bd-example-modal-lg" id="id{{$syllabus->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$syllabus->id}}label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="id{{$syllabus->id}}">{{$syllabus->title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $syllabus->syllabus !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection