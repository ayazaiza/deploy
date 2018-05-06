<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\data;
use App\tvseries;
//use Symfony\Component\HttpFoundation\Request;

class moviesController extends Controller
{
    // All Movie Request here

    public function movies()
    {

        $movies = data::orderBy('rel_date', 'desc')->paginate(40);
        return view('pages.movies')->with('movies',$movies);
        
    }

    public function series()
    {
        $series = tvseries::orderBy('rel_date','desc')->paginate(40);
        return view('pages.series')->with('series',$series);
    }

    public function searchquery(Request $req)
    {

        $sea = data::orderBy('rel_date','desc')->where('title','LIKE','%'.$req->search.'%')->paginate(33);
        return view('pages.search')->with('sea',$sea);
    }

    public function genres($gen)
    {

        $ge = data::orderBy('rel_date','desc')->where('genre','LIKE','%'.$gen.'%')->paginate(33);
       // return $ge;
        return view('pages.genres')->with('ge',$ge);
    }


}
