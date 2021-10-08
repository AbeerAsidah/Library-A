<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function create (){
        return view ('categories.create');

    }


      public function store ( Request $request){

        $check = Category ::where('name',$request->name)->first();

        if (!isset ($check)){
     
               $new_category= new Category;
               $new_category->name = $request->name;
                $new_category->save();
           }

        return back();

           // return $request->name ;
    }
    public function index()
    {
        $categories =Category::all();

    return view ('categories.index',compact('categories'));
  
    }

    public function delete ($id){
        $category= Category::where ('id',$id)->first();
         $category->delete();
         return back();
    }
     public function edit($id){
        $category = Category::find($id);
         return view('categories.edit',compact('category'));
    }

      public function update($id,Request $request){

         $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('/Categories'); 
    }
}
