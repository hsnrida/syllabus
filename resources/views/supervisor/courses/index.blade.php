@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div>
        @if (Session::has('msg'))
        <div class="alert alert-danger">{{ Session::get('msg') }}</div>
        @endif

      </div><br><br>
      <div class="card">


        <div class="card-header">Courses</div>

        <div class="card-body">
          <form action="{{route('supervisor.courses.distribute' ) }}" method="POST">
            @csrf
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">builder</th>
                  <th scope="col">validator</th>


                </tr>
              </thead>
              <tbody>
                <?php $c = 0; ?>
                @foreach ($courses as $course)

                <tr>
                  <th scope="row">{{$c+1}}</th>
                  <td>{{$course->title}}</td>
                  <td>
                    <div class="input-group mb-3">
                      <select name="selectBuilder[{{$c}}]" class="custom-select" id="selectBuilder[{{$c}}]">
                        <option selected>Choose...</option>
                        @foreach($builders as $builder)
                        <option value="{{ $builder->id }}">{{ $builder->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </td>
                  <td>
                    <div class="input-group mb-3">
                      <select name="selectValidator[{{$c}}]" class="custom-select" id="selectValidator[{{$c}}]">
                        <option selected>Choose...</option>
                        @foreach($validators as $validator)
                        <option value="{{ $validator->id }}">{{ $validator->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </td>



                </tr>
                <input type="text" hidden value="{{$course->id}}" id="course[{{$c}}]" name="course[{{$c}}]">
                <?php $c++; ?>
                @endforeach

              </tbody>
            </table>
              <div class="center">
                <button type="submit" class="btn btn-success btn-lg ">Distribute</button>
            </div><br>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .center {
    margin: 0;
    position: absolute;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
</style>
@endsection