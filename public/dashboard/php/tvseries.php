<?php

if(file_get_contents("php://input")){

    require 'db.php';

    $postdata =  json_decode(file_get_contents("php://input"));

    //echo $postdata->imdId;

    $title = mysqli_real_escape_string($connection,$postdata->title);
    $imdb = mysqli_real_escape_string($connection,$postdata->imdId);
    $slug = mysqli_real_escape_string($connection,$postdata->slug);
    $episode = mysqli_real_escape_string($connection,$postdata->episode);
    $description = addslashes(mysqli_real_escape_string($connection,$postdata->overview));
    $poster_path = mysqli_real_escape_string($connection,$postdata->poster_path);
    $uni_id = mysqli_real_escape_string($connection,$postdata->uni_id);
    $vote_count = mysqli_real_escape_string($connection,$postdata->vote_count);
    $season = mysqli_real_escape_string($connection,$postdata->season);
    $release_date = mysqli_real_escape_string($connection,$postdata->release_date);
    $language =mysqli_real_escape_string($connection,$postdata->original_language);
    $runtime =mysqli_real_escape_string($connection,$postdata->runtime);
    $year =mysqli_real_escape_string($connection,$postdata->year);
    $rating =mysqli_real_escape_string($connection,$postdata->vote_average);
   // $cate = 'movie';
    $status = 'active';
    $type = mysqli_real_escape_string($connection,$postdata->type);
    $director = @mysqli_real_escape_string($connection,$postdata->director);
    $actors = mysqli_real_escape_string($connection,$postdata->actors); 
    $fruitList = mysqli_real_escape_string($connection,$postdata->genres);
    $count = mysqli_real_escape_string($connection,$postdata->country);


    $sql = "SELECT * FROM `tvseries` WHERE `title`='$title' AND `imdb_id`='$imdb' AND `seasons_no`='$season' AND `no_of_episodes`='$episode'";

    $run =  mysqli_query($connection,$sql);

    if(mysqli_num_rows($run) <= 0){
        $query = "INSERT INTO `tvseries`(title,slug,imdb_id,poster,seasons_no,no_of_episodes,uni_id,rel_date,description,genre,type,director,actors,rating,country,language,votes,year,runtime) 
        VALUES('$title','$slug','$imdb','$poster_path','$season','$episode','$uni_id','$release_date','$description','$fruitList','$type','$director','$actors','$rating','$count','$language','$vote_count','$year','$runtime')";

        if(mysqli_query($connection,$query)){
            echo 'Successfully Inserted';
            mysqli_close($connection);
        }else{
            echo 'Something went wrong';
            mysqli_close($connection);
        }

    }else{
        echo $title.' Already exists';
        mysqli_close($connection);
    }
}


?>