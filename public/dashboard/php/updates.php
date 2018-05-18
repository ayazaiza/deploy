<?php

if(file_get_contents("php://input")){

    require 'db.php';

    $postdata =  json_decode(file_get_contents("php://input"));

    $imdb = mysqli_real_escape_string($connection,$postdata->imdId);
    $backdrop_path = mysqli_real_escape_string($connection,$postdata->backdrop_path);
    $release_date = mysqli_real_escape_string($connection,$postdata->release_date);

    $tmdb_id = mysqli_real_escape_string($connection,$postdata->id);

    $path = 'https://image.tmdb.org/t/p/w1280';
    $poster_path = 'https://image.tmdb.org/t/p/w300';

    $fin = $path.$backdrop_path;

  

    $update = "UPDATE `data` SET `backdrop`='$fin',tmdb_id='$tmdb_id',rel_date='$release_date' WHERE `imdb_id`='$imdb'";


    if(mysqli_query($connection,$update)){
        echo 'Successfully Inserted';
        mysqli_close($connection);
    }else{
        echo 'Something went wrong';
        mysqli_close($connection);
    }






}


?>