<?php

$sql = "SELECT * FROM bevetelezes";
$conn = new mysqli("localhost", "root", "", "V1GS5D");

$result = $conn -> query($sql);
//echo $result -> num_rows;


if($result -> num_rows > 0){
    $arr = array();
    while ($row = $result->fetch_assoc()) {
        array_push($arr, array('bevetelezesID' => $row['bevetelezesID'], 'VevoID' => $row['VevoID'], 'kiszamlazott_osszeg' => $row['kiszamlazott_osszeg']));
    }
    echo json_encode($arr);
}


?>