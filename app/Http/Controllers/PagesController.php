<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getMovies(){
        return view('movies');
    }
    public function getContact(){
        return view('contact');
    }
    public function getSeries(){
        return view('series');
    }
    public function getCartoons(){
        return view('cartoons');
    }
    public function getHoror(){
        return view('horor');
    }

}
