
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  All books page</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th> Description</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $books as $book )
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book ->name }}</td>
        <td>{{ $book ->description }}</td>


        <td>
          <a  href="/books/edit/{{ $book->id }} " class="btn btn-success">Edit</a>
         <a  href="/books/delete/{{ $book->id }} "  class="btn btn-danger">Delete</a> 
       </td>

      </tr>
     @endforeach
    </tbody>
  </table>


</div>
@endsection









