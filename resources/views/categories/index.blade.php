
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  All Categories page</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $categories as $category )
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category ->name }}</td>
        <td><button type="button" class="btn btn-success">Edit</button></td>
        <button type="button" class="btn btn-danger">Delet</button>

      </tr>
     @endforeach
    </tbody>
  </table>


</div>
@endsection









