@extends('layouts.lay')

@section('layout')

   <div class="container-fluid">
  
   <div class=" text-white bg-primary my-3 text-center">
        <div class="card-body">
          <p class="text-white m-0">Ads can be a pain, but they are our only way to maintain the server and keep website live. Your patience is highly appreciated and we hope our service can be worth it.</p>
        </div>
      </div>

      
  <div class="row text-center text-lg-left">


@if(count($movies) > 1)

  @foreach($movies as $movie)
  @if($movie->poster != 'N/A' && $movie->poster != '')
 <div class="col-md-2 col-xl-2 col-xs-4 col-lg-2 col-sm-4 singleVideo "  tooltip="yes" >

<a href="/watchmovie/{{$movie->slug}}/{{$movie->imdb_id}}" class="d-block mb-3 h-70 subitem ml-mask">
<img alt="img" class="img-fluid img-thumbnail img-border" src="{{$movie->poster}}">
<!-- <div class="imgabsolute"></div> -->
</a>

 <p class="overlay1" >{{$movie->title}}</p>

 <div class="popcontents">

   <div class="row">
     <div class="col-md-12 tiptitle">
       <h5>{{$movie->title}}</h5>
     </div>
   </div>

   <div class="row">
     <div class="col-md-12 bk">
       <div class="row">
         <div class="col-md-4 jt-imdb">
           IMDB : {{$movie->rating}}
         </div>
         <div class="col-md-4">
         {{$movie->year}}
         </div>
         <div class="col-md-4">
         {{$movie->runtime}}
         </div>
       </div>
     </div>


     <div class="row">
       <div class="col-md-12">
         <p class="desc"> {{$movie->description}}</p>
       </div>
     </div>

     <div class="row">
       <div class="col-md-12">
         <p class=""></p>
       </div>
     </div>
    
   </div>

<div class="jtip-bottom">
<a href="/watchmovie/{{$movie->slug}}/{{$movie->imdb_id}}" class="btn btn-block btn-successful">
<i class="fa fa-play-circle mr10"></i>Watch movie</a>

</div>
</div>

</div>
@endif
@endforeach



@endif

 </div>
 {{$movies->links()}}
       
</div>

@endsection