<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="PwcfXbJVQkgRjYAzf8sqiCmulb3HMRDUTyw_Xjbggfg" />
        <meta name="msvalidate.01" content="FCCD640644A5AC0B460B02C096C012DA" />
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow" />
        <meta property="og:locale" content="en_US" />
        <meta http-equiv="content-language" content="en" /> 
        <meta name="description" content="Watch {{$data->title}} Online Free omovies {{$data->title}} Full Movie Online Free {{$data->title}} omovies {{$data->title}} Watch Online Free {{$data->title}} Watch Full Movie Online free." />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content=" Watch {{$data->title}} online free omovies | omovies.ga" />
        <meta property="og:description" content="Watch {{$data->title}} Online Free omovies {{$data->title}} Full Movie Online Free {{$data->title}} omovies {{$data->title}} Watch Online Free {{$data->title}} Watch Full Movie Online free." />
        <meta property="og:url" content="http://www.omovies.ga/watchmovie/{{$data->slug}}/{{$data->imdb_id}}" />
        <meta property="og:site_name" content="Online Free omovies | omovies.ga" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="Watch {{$data->title}} Online Free omovies {{$data->title}} Full Movie Online Free {{$data->title}} omovies {{$data->title}} Watch Online Free {{$data->title}} Watch Full Movie Online free." />
        <meta name="twitter:title" content="Watch {{$data->title}} online free omovies | omovies.ga" />
        
        <meta content="INDEX,FOLLOW" name="Robots"/>
        <meta content="index,follow,snipet" name="googlebot"/>
        <meta content="All, FOLLOW" name="GOOGLEBOTS"/>
        <meta content="All, FOLLOW" name="YAHOOBOTS"/>
        <meta content="All, FOLLOW" name="MSNBOTS"/>
        <meta content="All, FOLLOW" name="BINGBOTS"/>
        <meta content="all" name="Googlebot-Image"/>
        <meta content="all" name="Slurp"/>
        <meta content="all" name="Scooter"/>
        <meta content="ALL" name="WEBCRAWLERS"/>
        <title>Watch {{$data->title}} online free omovies | omovies.ga</title>
    
        <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <script src="/js/app.js'"></script>


    
    
    </head>
    <body>
    @include('includes.nav')
    @include('includes.bread')
      @yield('layout')
    @include('includes.profile')

     @include('includes.footer')


    </body>
</html>
