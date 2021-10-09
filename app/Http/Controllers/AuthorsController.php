<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
class AuthorsController extends Controller
{
     public function create (){
        return view ('authors.create');

    }


      public function store ( Request $request){

       $new_author = new Author ;
       $new_author->name  =$request->name;
       $new_author->email =$request->email;
       
       // //processing image 
       $image = $request->file('imag_path');
       $name =time ().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/upload');
       $image->move($destinationPath, $name);

       $new_author->imag_path =  $name;
      // $new_author->imag_path = 'test';
       $new_author->save();
        return back();

         }



    public function index() {
        $authors =Author::all();

    return view ('authors.index',compact('authors'));
  
    }

    public function delete ($id){
        $author= author::where ('id',$id)->first();
         $author->delete();
         return back();
    }
     public function edit($id){
        $author = Author::find($id);
         return view('authors.edit',compact('author'));
    }
      public function update($id ,Request $request){
         $author = author::find($id);
        $author->name = $request->name;
        $author->save();
        return redirect('/authors'); 
    }
}
