@extends('layouts.default')
@section('title', 'Index')

@section('content')

@if(Session::has('success'))
	<div class="alert alert-success">
	  {{ Session('success') }}
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
					<a href="{{ url('posts/edit', $post['id']) }}" class="">Edit</a>		
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