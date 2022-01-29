@extends('layouts.default')
@section('title', 'Index')

@section('content')

@if(Session::has('success'))
	<div class="alert alert-success">
	  {{ Session('success') }}
	</div>
@endif

@if(Session::has('delpost'))
	<div class="alert alert-success">
	  {{ Session('delpost') }}
	</div>
@endif

<a class="btn btn-success" href="{{ url('posts/create') }}">Add Post</a>

<div class="row">
	<h1>Posts Data List</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{ $post['id'] }}</td>
				<td>{{ $post['title'] }}</td>
				<td>{{ $post['description'] }}</td>
				<td>
					<form action="{{ route('posts.delpost', $post['id']) }}" method="post">
					  <a href="{{ url('posts/edit',$post['id'] ) }}" class="btn btn-info">Edit</a>	
					  <a href="{{ url('posts/show',$post['id'] ) }}" class="btn btn-success">View</a>	
					  @csrf()					  
					  <input type="submit" name="submit" value="Remove" class="btn btn-danger">
                    </form>
				</td>
			</tr>	
			@endforeach
		</tbody>
	</table>

    <div class="d-flex justify-content-center">
		{{ $posts->links() }}
	</div>

</div>

@endsection

