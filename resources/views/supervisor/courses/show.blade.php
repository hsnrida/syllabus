@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div>

      </div><br><br>
      <div class="card">
        <div class="card-header text-center  " style="background-color:transparent;">
          <h1><span class="badge badge-primary">Syllabus Distribution</span></h1>
        </div>

        <div class="card-body">

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">code</th>
                <th scope="col">Builder</th>
                <th scope="col">validator</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($courses as $course)
              <tr>
                <th scope="row">{{$course->id}}</th>
                <td>{{$course->title}}</td>
                <td>{{$course->code}}</td>
                <td> {{$course->syllabi->last()->user->name}}</td>
                <td> {{$course->syllabi->last()->validation->user->name}}</td>

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