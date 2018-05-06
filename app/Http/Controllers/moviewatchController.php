<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\data;

class moviewatchController extends Controller
{
    //
    public function show($slug,$id){
    //     $slug = $request->input('slug');
        // $slug  = Input::get('slug');
    //    $id = $request->input('id');
       // $id = Input::get('id');
     
       //$data = data::find($id);
       $data = data::where('imdb_id',$id)->first();
       $myStr = str_random(20);

       $da = ['id' => $id,'slug'=> $slug,'rand'=>$myStr, 'data'=>$data];
        //$da = array('id' => 'fdf','slug'=> 'dfdf');
        return view('pages.watchmovie')->with($da);
    }

    public function watch($slug, $id, $watching){
       
        //$data = data::find($id);
        $data = data::where('imdb_id',$id)->first();
        $w = strlen($watching);

        if(strlen($watching) < 22 ){
            $da = array('id' => $id,'slug'=> $slug, 'watchid'=>$w, 'data'=>$data);
            return view('pages.watching')->with($da);

        }else{
            return view('index');
        }
       
    }

    public function search($qu){

        $search = data::where ( 'title', 'LIKE', '%' . $qu . '%' )->get ();

        return $search;
    }

}
