@extends('dashboard.layout')
@section('content')
<form action="{{route('categories.update')}}" method="post" enctype="multipart/form-data">
  @csrf
  @method("PUT")
  <div class="form-row align-items-center">
    <div class="col-md-12">
      <label class="sr-only" for="inputCategoryTitle">Name</label>
      <input type="text" name="title" class="form-control mb-2" id="inputCategoryTitle" value="{{$category->title}}"placeholder="Category Title">
    </div>
    <div class="col-md-12">
      <label class="sr-only" for="inputContent">Name</label>
      <textarea type="text" name="content" class="form-control mb-2" id="inputContent"value="{{$category->content}}"></textarea>
    </div>
    <div class="col-md-12">
      <img src="{{asset($category->thumbnail)}}" alt="" class="
       img-fluid img-thumnail" width="100" height="100"/>
      <label class="sr-only" for="inputFileName">Name</label>
      <input type="file" name="thumbnail" class="form-control mb-2" id="inputFileName">
    </div>
    <div class="col-md-12">
      <label class="sr-only" for="inputFileName">Name</label>
      <select name="parent_id" id="">
      <option value="0" Select a Parent Category></option>
      @if(!$categories->isEmpty())
        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
      @endif
      </select>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary mb-2">Add New Category</button>
    </div>
  </div>
</form>
@endsection
