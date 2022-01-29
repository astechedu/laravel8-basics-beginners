@extends('layouts.default')
@section('title', 'View Post')

@section('content')
   
@if(Session::has('show'))
	<div class="alert alert-success">
	  {{ Session('show') }}
	</div>
@endif

<div class="row">
	<h1>Post ID: {{ $post['id'] }}</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>			
			</tr>
		</thead>

		<tbody>			
			<tr>
				<td>{{ $post['id'] }}</td>
				<td>{{ $post['title'] }}</td>
				<td>{{ $post['description'] }}</td>		
			</tr>				
		</tbody>
	</table>
</div>

@endsection