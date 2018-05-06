@extends('layouts.pro')

@section('layout')


<div class="container-fluid">


   <div class="row my-4 text-center">

        
   <div class="col-lg-12 ">

   <iframe src="https://gomostream.com/movie/{{$data->slug}}" class="frme"  allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"> 
   </iframe>


   </div>

   </div>

</div>


@endsection