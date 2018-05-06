<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          @foreach($caru as $car)
          @if($car->backdrop != 'https://image.tmdb.org/t/p/w1280')
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          @endif
          @endforeach
          <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{$caru[0]->backdrop}}')">
            <div class="carousel-caption d-none d-md-block" >
            
<a href="/watchmovie/{{$caru[0]->slug}}/{{$caru[0]->imdb_id}}">
              <h3>{{$caru[0]->title}}</h3>
           </a>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          @foreach($caru as $car)
          @if($car->backdrop != 'https://image.tmdb.org/t/p/w1280')
          <div class="carousel-item" style="background-image: url('{{$car->backdrop}}')">
            <div class="carousel-caption d-none d-md-block">
            <a href="/watchmovie/{{$car->slug}}/{{$car->imdb_id}}">
              <h3>{{$car->title}}</h3>
              </a>
            
            </div>
          </div>
          @endif
         @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>    
    


