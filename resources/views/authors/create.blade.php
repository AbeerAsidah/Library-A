
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  Create Authors page</h1>


		    <form action="/authors/store"  method="POST"  enctype="multipart/form-data">
		    	@csrf



		    	 <div class="form-group">
				    <label for="">Name:</label>
				    <input type="text" class="form-control" placeholder="Enter Name" id="name"  name="name">
				  </div>
			
		    
				  <div class="form-group">
				    <label for="imag_path">imag_path:</label>
				    <input type="file" class="form-control" placeholder="Enter imag_path" id="imag_path"  name="imag_path">
				  </div>
			

				 <div class="form-group">
					    <label for="email">email:</label>
					    <input type="text" class="form-control" placeholder="Enter Email" id="email"  name="email">
					  </div>
			
				  <button type="submit" class="btn btn-primary">Add</button>
		</form>


</div>
@endsection









