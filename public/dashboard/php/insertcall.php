<?php

if(file_get_contents("php://input")){

    require 'db.php';

    $postdata =  json_decode(file_get_contents("php://input"));

    //echo $postdata->imdId;

    $title = mysqli_real_escape_string($connection,$postdata->title);
    $imdb = mysqli_real_escape_string($connection,$postdata->imdId);
    $slug = mysqli_real_escape_string($connection,$postdata->slug);
   // $backdrop_path = mysqli_real_escape_string($connection,$postdata->backdrop_path);
    $description = addslashes(mysqli_real_escape_string($connection,$postdata->overview));
    $poster_path = mysqli_real_escape_string($connection,$postdata->poster_path);
 //   $tmdb_id = mysqli_real_escape_string($connection,$postdata->id);
    $vote_count = mysqli_real_escape_string($connection,$postdata->vote_count);
    $vote_average = mysqli_real_escape_string($connection,$postdata->vote_average);
    $release_date = mysqli_real_escape_string($connection,$postdata->release_date);
    $language =mysqli_real_escape_string($connection,$postdata->original_language);
    $runtime =mysqli_real_escape_string($connection,$postdata->runtime);
    $year =mysqli_real_escape_string($connection,$postdata->year);
    $cate = 'movie';
    $status = 'active';
    $type = mysqli_real_escape_string($connection,$postdata->type);
    $director = @mysqli_real_escape_string($connection,$postdata->director);
    $actors = mysqli_real_escape_string($connection,$postdata->actors);
    
    $fruitList = mysqli_real_escape_string($connection,$postdata->genres);
    $count = mysqli_real_escape_string($connection,$postdata->country);
//     echo $genres[0];
//   $len = count($genres);
//     if(!empty($genres)){
//         for($i =0;$i<=$len;$i++){
//             $res .= $genres[$i];
//         }
//         echo $genres;
//     }


//     $gen = $fruitList = '';
// foreach ($genres as $fruit)
//     {
//     $fruitList .= $gen . $fruit;
//     $gen = ', ';
// }


// $coun = $count = '';
// foreach ($country as $c)
//     {
//     $count .= $coun . $c;
//     $coun = ', ';
// }
 // echo $fruitList;
    // $slug = mysqli_real_escape_string($connection,$postdata->slug);
    // $date = date('D-M-Y');

    $sql = "SELECT * FROM `data` WHERE imdb_id ='$imdb' AND `title`='$title'";

    $run =  mysqli_query($connection,$sql);

    if(mysqli_num_rows($run) <= 0){
        $query = "INSERT INTO `data`(imdb_id,title,slug,dates,description,rating,poster,category,language,country,genre,type,status,vote_count,runtime,year,actors,director) 
        VALUES('$imdb','$title','$slug','$release_date','$description','$vote_average','$poster_path','$cate','$language','$count','$fruitList','$type','$status','$vote_count','$runtime','$year','$actors','$director')";

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