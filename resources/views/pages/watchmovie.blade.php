@extends('layouts.pro')

@section('layout')


<div class="container-fluid">
<div class="card text-white bg-primary my-3 text-center">
        <div class="card-body">
          <p class="text-white m-0">Ads can be a pain, but they are our only way to maintain the server and keep website live. Your patience is highly appreciated and we hope our service can be worth it.</p>
        </div>
      </div>

  <div class="">
 <h1 class="display-3"></h1>
 

   <div class="row my-4 text-center">

   <div class="col-lg-12 ">
        <a href="/watchmovie/{{$slug}}/{{$id}}/{{$rand}}">
        @if($data->backdrop != 'https://image.tmdb.org/t/p/w1280')
          <img class="img-fluid rounded" style="height:550px;width:85%;"
           src="{{$data->backdrop}}" 
           alt="">
        @else
        <img class="img-fluid rounded" style="height:550px;width:85%;"
           src="/img/bg.jpg" 
           alt="">

        @endif
          <div class="centered">
           
              <img class="img-fluid" style="height:100px" src="/img/play.png" alt="" srcset="">
          
          </div>
          </a>
        </div>
    

        <!-- /.col-lg-8 -->
        
        <!-- /.col-md-4 -->
      </div>


</div>

</div>


@endsection