@extends('layouts.default')
@section('title', 'Create Post')

@section('content')
   <h1>Add New Post</h1>


   <form action="{{ url('posts/create') }}" method="post">
    @csrf()

    <div class="form-group">
   	  <input type="text" name="title" value="" placeholder="Title" class="form-control">
    </div>

	 @error('title')
	    <div class="alert alert-danger">{{ $message }}</div>

	 @enderror  	

    <div class="form-group">
   	  <input type="text" name="description" value="" placeholder="Description" class="form-control">
    </div>

	 @error('description')
	    <div class="alert alert-danger">{{ $message }}</div>

	 @enderror  
    <div class="form-group">
   	  <input type="submit" name="submit" value="Post" class="btn btn-lg btn-success form-control">
    </div>

   </form> 

   <hr>
@endsection