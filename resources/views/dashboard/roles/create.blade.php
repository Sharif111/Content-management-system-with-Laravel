@extends('dashboard.layout')
@section('content')
<form action="{{route('roles.store')}}" method="post">
	@csrf
  <div class="form-row align-items-center">
    <div class="col-md-8">
      <label class="sr-only" for="inputRoleName">Name</label>
      <input type="text" name="name" class="form-control mb-2" id="inputRoleName" placeholder="Role Name">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary mb-2">Add New Role</button>
    </div>
  </div>
</form>
@endsection
