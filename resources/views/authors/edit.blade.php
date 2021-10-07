
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  Edit Author page</h1>


		    <form action="/authors/update/{{ $author->id }}"  method="POST">
		    	@csrf
		    
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" placeholder="Enter Name"   id="name"  name="name" value="{{ $author->name }}" >
				  </div>
				
				 
				  <button type="submit" class="btn btn-primary">Update</button>
		</form>


</div>
@endsection









