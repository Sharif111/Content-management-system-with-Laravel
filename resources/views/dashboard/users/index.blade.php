@extends('dashboard.layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap
 flex-md-nowcrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Users Section<h2>
   <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
     <a href="{{route('users.create')}}" type="button" class="
      btn btn-sm btn-outline-secondary">Add New User</a>
    </div>
   </div>
  </div>
    @if(!$users->isEmpty())
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Thumbnail</th>
              <th>City</th>
              <th>Country</th>
              <th>Roles</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Actions</th>
            </tr>
          </thead>      
        <tbody>
        	@foreach($users as $user)
        	<tr>
        		<td>{{$user->id}}</td>
        		<td>{{$user->title}}</td>
        		<td><img src="{{asset($user->profile->photo)}}" width="50" height="50" /></td>
            <td>
              {{$user->profile->city}}
            </td>
            <td>
              {{$user->profile->country->name}}
            </td>
            <td>
                @if(!$user->roles->isEmpty())
                {{$user->roles->implode('name',',')}}
                @endif
            </td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        		<td>
               <div class="btn-group" role="group" aria-label="Basic example">
               <a role="button" href="{{route('roles.edit',$role->id)}}" class="btn btn-link">Edit</a>
               <form method="post" action="{{route('roles.destroy',$role->id)}}">
               @csrf
               @method("DELETE")
               <button type="submit" class="btn btn-link">Delete
               </button>
               </form>
               </div>
            </td>
        	</tr>
        	@endforeach
        </tbody>
        <table>
      </div>
      @else
      <p class="alert alert-info">No Users record Found...</p>
      @endif
@endsection
