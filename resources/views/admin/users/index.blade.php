@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div>
 
      </div><br><br> 
      <div class="card">

        <div class="card-header">Users</div>

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
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
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
@endsection