<?php

if(file_get_contents("php://input")){

    require 'db.php';

    $postdata =  json_decode(file_get_contents("php://input"));

    $colum = mysqli_real_escape_string($connection,$postdata->colum);
    $query = mysqli_real_escape_string($connection,$postdata->query);


    if($query == 'empty'){
        $query =  " " ;


    }
 //echo $colum;
    $quer ="SELECT * FROM `data` WHERE $colum = '$query' ORDER BY RAND() LIMIT 0,38";



  

   if( $sql = mysqli_query($connection,$quer)  ){

    $query2 ="SELECT * FROM `data` WHERE $colum = '$query'";

     $ru = mysqli_query($connection,$query2);
    $r = mysqli_num_rows($ru);
    
   $out = array();
    
    while($row = mysqli_fetch_array($sql)){
      
        $out[]=array( "title"=>$row['title'],
        "slug"=>$row['slug'],
        "description"=>$row['description'],
        "genre" => $row['genre'],
        "rating" =>$row['rating'],
        "country" =>$row['country'],
        "imdb_id" =>$row['imdb_id'],
        "runtime" =>$row['runtime'],
        "year" =>$row['year'],
        "language" =>$row['language'],
        "vote_count" =>$row['vote_count'],
        "backdrop" =>$row['backdrop'],
        "id" =>$row['id'],
        "tmdb_id" =>$row['tmdb_id'],
        "date" =>$row['dates'],
        "poster"=>$row['poster'],
        "rel_date" =>$row['rel_date'],
        "director" => $row['director'],
        "actors" => $row['actors']
    
    );

    }

   
    $output = array( "total" => $r, "result" =>$out );
 
  	echo json_encode($output);

   }
else{
    echo 'Sorry';
}
    




}

?>