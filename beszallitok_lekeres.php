<?php

$sql = "SELECT * FROM beszallitok";
$conn = new mysqli("localhost", "root", "", "V1GS5D");

$result = $conn -> query($sql);
//echo $result -> num_rows;

openlog("beszallitok_lekeres", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

if($result -> num_rows > 0){
    $arr = array();
    while ($row = $result->fetch_assoc()) {
        array_push($arr, array('id' => $row['beszallitoID'], 'nev' => $row['beszallitoNev'], 'termek' => $row['Termek_Es_Szolgaltatas_ID'], 'Ar' => $row['Ar']));
    }
    echo json_encode($arr);
}


?>