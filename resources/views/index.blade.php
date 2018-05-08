@extends('layouts.lay')

@section('layout')



   <div class="container-fluid">
   <div class="card text-white bg-info my-3 text-center">
        <div class="card-body">
          <p class="text-white m-0">Ads can be a pain, but they are our only way to maintain the server and keep website live. Your patience is highly appreciated and we hope our service can be worth it.</p>
        </div>
      </div>

<div class="row">
  <div class="col-lg-3">
 
    <h1 class="btn btn-primary btn-lg">SUGGESTION</h1>
  </div>
</div>
      
  <div class="row text-center text-lg-left">


@if(count($limit) > 1)

  @foreach($limit as $movies)
  @if($movies->poster == 'N/A')

   <?php $movies->poster = '/img/no.png'; ?>

  @elseif($movies->poster == '')
  <?php $movies->poster = '/img/no.png'; ?>

  @endif

 <div class="col-md-2 col-xl-2 col-xs-4 col-lg-2 col-sm-4 singleVideo "  tooltip="yes" >

<a href="/watchmovie/{{$movies->slug}}/{{$movies->imdb_id}}" class="d-block mb-3 h-70 subitem ml-mask">
<img alt="img" class="img-fluid img-thumbnail img-border" src="{{$movies->poster}}">
</a>

 <p class="overlay1" >{{$movies->title}}</p>

 <div class="popcontents">

   <div class="row">
     <div class="col-md-12 tiptitle">
       <h5>{{$movies->title}}</h5>
     </div>
   </div>















   <div class="row">
     <div class="col-md-12 bk">
       <div class="row">
         <div class="col-md-4 jt-imdb">
           IMDB : {{$movies->rating}}
         </div>
         <div class="col-md-4">
         {{$movies->year}}
         </div>
         <div class="col-md-4">
         {{$movies->runtime}}
         </div>
       </div>
     </div>


     <div class="row">
       <div class="col-md-12">
         <p class="desc"> {{$movies->description}}</p>
       </div>
     </div>

     <div class="row">
       <div class="col-md-12">
         <p class=""></p>
       </div>
     </div>
    
   </div>

<div class="jtip-bottom">
<a href="/watchmovie/{{$movies->slug}}/{{$movies->imdb_id}}" class="btn btn-block btn-successful">
<i class="fa fa-play-circle mr10"></i>Watch movie</a>

</div>
</div>

</div>

@endforeach



@endif








 </div>



<div class="card text-white bg-primary my-3 text-center">
        <div class="card-body">
          <p class="text-white m-0">Ads can be a pain, but they are our only way to maintain the server and keep website live. Your patience is highly appreciated and we hope our service can be worth it.</p>
        </div>
      </div>

       
       <div class="row text-center text-lg-left">


@if(count($tvseries) > 1)

  @foreach($tvseries as $movies)
  @if($movies->poster == 'N/A')

   <?php $movies->poster = '/img/no.png'; ?>

  @elseif($movies->poster == '')
  <?php $movies->poster = '/img/no.png'; ?>

  @endif
 <div class="col-md-2 col-xl-2 col-xs-4 col-lg-2 col-sm-4 singleVideo "  tooltip="yes" >

<a href="/watchseries/{{$movies->slug}}/{{$movies->imdb_id}}" class="d-block mb-3 h-70 subitem ml-mask">
<img alt="img" class="img-fluid img-thumbnail img-border" src="{{$movies->poster}}">
</a>

 <p class="overlay1" >{{$movies->title}}</p>

 <div class="popcontents">

   <div class="row">
     <div class="col-md-12 tiptitle">
       <h5>{{$movies->title}}</h5>
     </div>
   </div>

   <div class="row">
     <div class="col-md-12 bk">
       <div class="row">
         <div class="col-md-4 jt-imdb">
           IMDB : {{$movies->rating}}
         </div>
         <div class="col-md-4">
         {{$movies->year}}
         </div>
         <div class="col-md-4">
         {{$movies->runtime}}
         </div>
       </div>
     </div>


     <div class="row">
       <div class="col-md-12">
         <p class="desc"> {{$movies->description}}</p>
       </div>
     </div>

     <div class="row">
       <div class="col-md-12">
         <p class=""></p>
       </div>
     </div>
    
   </div>

<div class="jtip-bottom">
<a href="/watchseries/{{$movies->slug}}/{{$movies->imdb_id}}" class="btn btn-block btn-successful">
<i class="fa fa-play-circle mr10"></i>Watch series</a>

</div>
</div>

</div>

@endforeach

@endif
</div>
</div>
@endsection

