
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  Create Books page</h1>


		    <form action="/books/store"  method="POST"  enctype="multipart/form-data">
		    	@csrf
		    
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" placeholder="Enter Name" id="name"  name="name">
				  </div>
			
			       <div class="form-group">
				    <label for="description">Description</label>
				   <textarea class="form-control" name="description"></textarea>
				  </div>


				  	  <div class="form-group">
				    <label for="is_new">Is New?</label>
				  <select class="form-control" name="is_new" >
				  	<option value="1">Yes</option>
				  	<option value="0">No</option>
				  </select>
				  </div>

             <div class="form-group">
				    <label for="image">image</label>
				    <input type="file" class="form-control"  id="name"  name="image">
				  </div>


				    	  <div class="form-group">
				    <label for="category_id">Category</label>
				  <select class="form-control" name="category_id">
				  	@foreach($categories as $category)
				  	<option value="{{ $category->id }}">{{ $category->name }}</option>
				  	
				  	@endforeach
				  </select>
				  </div>

				  <button type="submit" class="btn btn-primary">Add</button>
		</form>


</div>
@endsection









