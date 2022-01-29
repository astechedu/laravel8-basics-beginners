@extends('layouts.default')
@section('title', 'Edit Post')

@section('content')
   <h1>Edit Post</h1>
   
   <form action="{{ url('posts/update',$post->id) }}" method="POST">
    @csrf()  

    <div class="form-group">
   	  <input type="text" name="title" value="{{ $post['title'] }}" placeholder="Title" class="form-control">
    </div>

	 @error('title')
	    <div class="alert alert-danger">{{ $message }}</div>

	 @enderror  	

    <div class="form-group">
   	  <input type="text" name="description" value="{{ $post['description'] }}" placeholder="Description" class="form-control">
    </div>

	 @error('description')
	    <div class="alert alert-danger">{{ $message }}</div>

	 @enderror  

    <div class="form-group">
   	  <input type="submit" name="submit" value="Update" class="btn btn-lg btn-success form-control">
    </div>

   </form> 

   <hr>
@endsection