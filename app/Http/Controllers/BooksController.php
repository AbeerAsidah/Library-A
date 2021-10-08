<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
class BooksController extends Controller
{
    
    public function create (){
        return view ('books.create');

    }


      public function store ( Request $request){

        $check = book ::where('name',$request->name)->first();

        if (!isset ($check)){
     
               $new_book= new Book;
               $new_book->name = $request->name;
                $new_book->save();
           }
        return back();}


    public function index()
    {
        $books =Book::all();
    return view ('books.index',compact('books'));
    }

    public function delete ($id){
        $book= Book::where ('id',$id)->first();
         $book->delete();
         return back();
    }

     public function edit($id){
        $book= Book::find($id);
         return view('books.edit',compact('books'));
    }
    
      public function update($id ,Request $request){
         $book= Book::find($id);
        $book->name = $request->name;
        $book->save();
        return redirect('/books'); 
    }
}
