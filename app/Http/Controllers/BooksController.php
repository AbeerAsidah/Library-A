<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book ;
use App\Category;

class  BooksController extends Controller
{ 
  
    
    public function create (){
        $categories = Category::all();
        return view ('books.create', compact('categories'));

    }


      public function store ( Request $request){
     
               $new_book= new Book;
               $new_book->name        = $request->name;
               $new_book->description = $request->description;
               $new_book->is_new      = $request->is_new;
               $new_book->category_id = $request->category_id;

               //           //processing image 
               $image = $request->file('image');
               $name =time ().'.'.$image->getClientOriginalExtension();
               $destinationPath = public_path('/upload');
               $image->move($destinationPath, $name);
                 $new_book->image =  $name;
                // $new_book->image = 'test';
                $new_book->save();
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
         return view('books.edit',compact('book'));
    }
    
      public function update($id ,Request $request){
         $books= Book::find($id);
        $book->name = $request->name;
        $book->save();
        return redirect('/books'); 
    }
}



