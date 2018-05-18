<?php

require 'db.php';

$g ="2018";
$f ="2018";
$r = '9';

$query = "SELECT * FROM `data` WHERE year BETWEEN '".$g."' AND '".$f."' ORDER BY year DESC";

$query2 = "SELECT * FROM `data` WHERE year ='2018'";

$query3 = "SELECT * FROM `data` WHERE year ='2018' ORDER BY rating DESc";


$query4 = "SELECT * FROM `data` ORDER BY dates ASC";


$query5 = "SELECT * FROM `data`  ORDER BY dates ASC LIMIT 30";


$run = mysqli_query($connection,$query);
$fetch = mysqli_num_rows($run);
echo $fetch;

while($r=mysqli_fetch_array($run)){
    echo $r['dates'].":".$r['title']."<br/>";
}
// $arr = array('11-01-2012', '01-01-2014', '01-01-2015', '09-02-2013', '01-01-2013'); 
// $arr2 = array(array('a' => '11 feb 2012'), array('a'=>'01 feb 2012'),array('a'=>'01 Jan 2015'));    
// function date_sort($a, $b) {
//     return strtotime($a) - strtotime($b);
// }
// usort($arr, "date_sort");
// //print_r($arr);

// echo json_encode($arr2);

?>