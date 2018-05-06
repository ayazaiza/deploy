<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow" />
        <meta property="og:locale" content="en_US" />
        <meta http-equiv="content-language" content="en" /> 
        <meta name="description" content="{{$data->description}} omovies.ga" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content=" {{$data->title}}- omovies.ga" />
        <meta property="og:description" content="{{$data->description}} omovies.ga." />
        <meta property="og:url" content="http://www.omovies.ga/watchmovie/the-croods-2/tt2850386" />
        <meta property="og:site_name" content="Online Free omovies | omovies.ga" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="{{$data->description}} omovies.gaa" />
        <meta name="twitter:title" content="{{$data->descrition}} - omovies.ga" />
        <title>{{$data->title}} - omovies.ga</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <script src="{{asset('js/app.js')}}"></script>


    
    
    </head>
    <body>
    @include('includes.nav')
    @include('includes.bread')
      @yield('layout')
    @include('includes.profile')

     @include('includes.footer')


    </body>
</html>
