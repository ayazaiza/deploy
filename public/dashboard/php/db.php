<?php

    $host = 'localhost';
    $username = 'root';
    $password = 'riyaz786.';
    $dbName = 'moviesapp';

    $connection = mysqli_connect($host,$username,$password,$dbName);

    if(!$connection){
        die("Error occur in connection ".mysqli_connect_error());
    }

?>