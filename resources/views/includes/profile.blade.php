<div class="container">
 
    <div class="row">
        <div class="col-sm-3">
        @if($data->poster == 'N/A')

<?php $data->poster = '/img/no.png'; ?>

@elseif($data->poster == '')
<?php $data->poster = '/img/no.png'; ?>

@endif
        <img src="{{$data->poster}}" class="img-fluid" style="height:350px;margin:10px;" alt="" srcset="">
        </div>
        <div class="col-sm-9">
          @if(!empty($data))
          <h2 class="mt-4">{{$data->title}}</h2>
          @else
          <h2 class="mt-4">Title</h2>
          @endif
          <p>{{$data->description}}</p>
          <p>
            <b>Genre :</b>
            {{$data->genre}}
             </p>
             <p>
            <b>Actors :</b>
            {{$data->actors}}
             </p>
             <p>
            <b>Director :</b>
            {{$data->director}}
             </p>
             <p>
             <b>Country :</b>
            {{$data->country}}
             </p>
             <p>
             <b>IMDB :</b>
            {{$data->rating}}
             </p>
        </div>
        <!-- <div class="col-sm-3">
        
         
        </div> -->
      </div>
     
  
</div>