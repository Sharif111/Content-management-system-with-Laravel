@extends('dashboard.layout')

@section('content')
  <div class="d-flex justify-content-between flex-wrap
    flex-md-nowcrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Category Section<h2>
  <div class="btn-toolbar mb-2 mb-md-0">
   <div class="btn-group mr-2">
     <a href="{{route('categories.create')}}" type="button" class="
      btn btn-sm btn-outline-secondary">Add New Categories</a>
    </div>
  </div>
  </div>
    @if($category)
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Content</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Users</th>
              <th>Actions</th>
            </tr>
          </thead>      
        <tbody>
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->content}}</td>
            <td>img src="{{storage($category->thumbnail)}}"</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td></td>
            <td>
               <div class="btn-group" role="group" aria-label="Basic example">
               <a role="button" href="{{route('categories.edit',$category->id)}}" class="btn btn-link">Edit</a>
               <form method="post" action="{{route('categories.destroy',$category->id)}}">
               @csrf
               @method("DELETE")
               <button type="submit" class="btn btn-link">Delete</button>
               </form>
               </div>
            </td>
          </tr>
        </tbody>
        <table>
      </div>
      @else
      <p class="alert alert-info">No Roles record Found...</p>
      @endif
@endsection
