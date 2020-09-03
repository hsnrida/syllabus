@extends('layouts.app')

@section('content')
<body >
  
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div>
 
      </div><br><br> 
      <div class="card">

      <div class="card-header text-center  " style="background-color:transparent;">
          <h1><span class="badge badge-primary">Users</span></h1>
        </div>
        <div class="card-body">

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Approved</th>
                <th scope="col">Roles</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $c=0 ?>
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{ ++$c}}</th>
                <td>{{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td>@if($user->approved)Yes @else No @endif</td>
                <td> {{implode(',', $user->roles()->get()->pluck('name')->toArray())}}</td>
                <td>

                  <a href="{{ route('admin.users.edit', $user->id)}}"> <button type="button" class="btn btn-primary float-left mr-2">Edit</button> </a>


                  <form action="{{route ('admin.users.destroy',$user)}}" method="Post" class="float-left">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>


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
</body>

@endsection