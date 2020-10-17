@extends('dashboard.layout')
@section('content')
<form action="{{route('roles.update',$role->id)}}" method="post">
	@csrf
  @method('PUT')
  <div class="form-row align-items-center">
    <div class="col-md-8">
      <label class="sr-only" for="inputRoleName">Name</label>
      <input type="text" name="name" class="form-control mb-2" id="inputRoleName" placeholder="Role Name" value="{{$role->name}}">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary mb-2">Update New User</button>
    </div>
  </div>
</form>
@endsection
