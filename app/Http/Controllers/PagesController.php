<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
     public function about(){
        return view('about');
    }
      public function course(){
        return view('course');
    }
      public function home(){
        return view('home');
    }

     public function contact(){
        return view('contact');
      }


      public function teacher(){
        return view('teacher');
      }
}
