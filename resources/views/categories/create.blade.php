
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  Create Category page</h1>


		    <form action="/Categories/store"  method="POST">
		    	@csrf
		    
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" placeholder="Enter Name" id="name"  name="name">
				  </div>
			
				  <button type="submit" class="btn btn-primary">Add</button>
		</form>


</div>
@endsection









