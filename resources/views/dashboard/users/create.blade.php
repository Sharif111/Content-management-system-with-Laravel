@extends('dashboard.layout')
@section('content')
<form action="{{route('users.store')}}" method="post">
	@csrf
  <div class="form-row align-items-center">
    <div class="col-md-12">
      <label for="inputUserName">Name</label>
      <input type="text" name="username" class="form-control mb-2" id="inputUserName" placeholder="Username">
    </div>
      <div class="col-md-12">
      <label for="inputName">Full Name</label>
      <input type="text" name="name" class="form-control mb-2" id="inputName" placeholder="Full Name">
    </div>
    <div class="col-md-12">
      <label for="inputUserEmail">Email</label>
      <input type="email" name="email" class="form-control mb-2" id="inputUserEmail" placeholder="Enter a Valid Email">
    </div>
      <div class="col-md-12">
      <label for="inputPassword">Password</label>
      <input type="password" name="password" class="form-control mb-2" id="inputPassword" placeholder="********">
    </div>
    <div class="col-md-12">
      <label for="inputPhone">Phone</label>
      <input type="text" name="phone" class="form-control mb-2" id="inputPhone" placeholder="+8801521109148">
    </div>
    <div class="col-md-12">
      <label for="selectCountry">Select Country</label>
      <select name="country" name="name" class="form-control">
        @if(!$countries->isEmpty())
          @foreach($countries as $counrty)
           <option value="{{$country->id}}">{{$country->name}}</option>
          @endforeach
        @endif
      </select>
    </div> 
    <div class="col-md-12 mt-3">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control mb-2" id="inputCity" placeholder="Enter Your City Name">
    </div>

    <div class="col-md-12">
      <label for="selectRoles">Select Roles</label>
      <select name="roles[]" id="" id="selectRoles" class="form-control" multiple>
        @if(!$roles->isEmpty())
          @foreach($roles as $role)
          <option value="{{$role->id}}">{{$role->name}}</option>
          @endforeach
        @endif
      </select>
    </div>
    <div class="col-md-12 mt-3 custom-file">
      <label for="inputFileName">Profile Image</label>
      <input type="file" name="photo" class="custom-file mb-2" id="inputFileName">
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary mb-2">Add New User</button>
    </div>
  </div>
</form>
@endsection
