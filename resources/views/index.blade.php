
<a class="btn btn-success" href="#">Add Post</a>


<a class="btn btn-success" href="#">NameRoute</a>



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
			
			<tr>
				<td>Id</td>
				<td>Title</td>
				<td>Description</td>
				<td>
					<form action="/" method="post">
					  <a href="#" class="btn btn-info">Edit</a>	
					  <a href="#" class="btn btn-success">View</a>	
					  @csrf()					  
					  <input type="submit" name="submit" value="Remove" class="btn btn-danger">
                    </form>
				</td>
			</tr>	
			
		</tbody>
	</table>

</div>


