
@extends('layouts.app')

@section('content')
<div class="container">
    

    <h1 class="text-center">  All authors page</h1>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Control</th>
      </tr>u
    </thead>
    <tbody>
      @foreach( $authors as $author )
      <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author ->name }}</td>
        <td>{{ $author ->email }}</td>

        <td>
          <a  href="/authors/edit/{{ $author->id }} " class="btn btn-success">Edit</a>
         <a  href="/authors/delete/{{ $author->id }} "  class="btn btn-danger">Delete</a> 
       </td>

      </tr>
     @endforeach
    </tbody>
  </table>


</div>
@endsection









