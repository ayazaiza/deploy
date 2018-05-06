<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public  function index(){
        $title = "This is Index Page";
        //return view('index' ,compact('title'));
        return view('index')->with('title',$title);
    }

    public  function about(){

        $array = array('title' => 'About Page', "fields" => ['web','pages']);
        return view('pages.about')->with($array);
    }
}
