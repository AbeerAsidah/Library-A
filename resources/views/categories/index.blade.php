
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

        <td>
          <a  href="/Categories/edit/{{ $category->id }} " class="btn btn-success">Edit</a>
         <a  href="/Categories/delete/{{ $category->id }} "  class="btn btn-danger">Delete</a> 
       </td>

      </tr>
     @endforeach
    </tbody>
  </table>


</div>
@endsection









