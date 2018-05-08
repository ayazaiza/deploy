<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="/">
  <!-- <img src="/img/logo.png" class="img-fluid" style="height:100px" alt=""> -->
  <h3> Om<img src="/img/play.png" style="height:40px;margin:-5px;" alt="">vies</h3>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-search"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
        <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">GENRES <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
                <a class="dropdown-item" href="/getby/action">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/getby/adventure">Adventure</a>
                <a class="dropdown-item" href="/getby/animation">Animation</a>
                <a class="dropdown-item" href="/getby/biography">Biography</a>
                <a class="dropdown-item" href="/getby/costume">Costume</a>
                <a class="dropdown-item" href="/getby/comedy">Comedy</a>
                <a class="dropdown-item" href="/getby/thriller">Thriller</a>
                <a class="dropdown-item" href="/getby/documentary">Documentary</a>
                <a class="dropdown-item" href="/getby/horror">Horror</a>
                <a class="dropdown-item" href="/getby/drama">Drama</a>
                <a class="dropdown-item" href="/getby/crime">Crime</a>
                <a class="dropdown-item" href="/getby/family">Family</a>
                <a class="dropdown-item" href="/getby/fantasy">Fantasy</a>
                <a class="dropdown-item" href="/getby/history">History</a>
                <a class="dropdown-item" href="/getby/kungfu">Kungfu</a>
                <a class="dropdown-item" href="/getby/music">Music</a>
                <a class="dropdown-item" href="/getby/mystery">Mystery</a>
                <a class="dropdown-item" href="/getby/romance">Romance</a>
                <a class="dropdown-item" href="/getby/sci-fi">Sci-Fi</a>
                <a class="dropdown-item" href="/getby/reality-tv">Reality-TV</a>
                <a class="dropdown-item" href="/getby/Sport">Sport</a>
                <a class="dropdown-item" href="/getby/war">War</a>
               
              </div>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="themes">COUNTRY <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="themes">
             
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/getcoun/Australia">Australia</a>
                <a class="dropdown-item" href="/getcoun/Canada">Canada</a>
                <a class="dropdown-item" href="/getcoun/china">China</a>
                <a class="dropdown-item" href="/getcoun/India">India</a>
                <a class="dropdown-item" href="/getcoun/Japan">Japan</a>
                <a class="dropdown-item" href="/getcoun/Southkorea">Southkorea</a>
                <a class="dropdown-item" href="/getcoun/US">US</a>
                <a class="dropdown-item" href="/getcoun/uk">UK</a>
              
              
               
              </div>
            </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">COUNTRY</a>
      </li> -->
      <li class="nav-item {{ Request::segment(1) === 'series' ? 'active' : null }}" >
        <a class="nav-link" href="{{ url('series' )}}">TV SHOWS</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'movies' ? 'active' : null }}"  >
        <a class="nav-link" href="{{ url('movies' )}}">MOVIES</a>
      </li>

       <!-- <li class="nav-item">
        <a class="nav-link" href="">EPISODES</a>
      </li> -->

      <li class="nav-item {{ Request::segment(1) === 'dmca' ? 'active' : null }}">
        <a class="nav-link" href="{{ url('dmca')}}">DMCA</a>
      </li>
    </ul>
  
    
  </div>
  <div class="collapse navbar-collapse float-right" id="navbarColor02">
    <form class="form-inline" action="/searchquery" method="POST" role="search">
    {{ csrf_field() }}
      <input class="form-control but" type="text" id="search" name="search" placeholder="Search">
      <!-- <button class="bu " type="submit">
      <i class="fa fa-search"></i>
      </button> -->
      
      <!-- <div id="se"></div> -->
<div class="suggestions" style="width:300px" id="se" style="">




</div>
    </form>

    </div>
</nav>
     
