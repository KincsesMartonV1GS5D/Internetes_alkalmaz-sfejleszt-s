<?php

$sql = "SELECT * FROM Szamla";
$conn = new mysqli("localhost", "root", "", "V1GS5D");

$result = $conn -> query($sql);
//echo $result -> num_rows;


if($result -> num_rows > 0){
    $arr = array();
    while ($row = $result->fetch_assoc()) {
        array_push($arr, array('id' => $row['ID'], 'vevoID' => $row['VevoID'], 'termek' => $row['Termek_Es_Szolgaltatas_ID'], 'arOsszeg' => $row['ArOsszeg'], 'kelte' => $row['Kelte']));
    }
    echo json_encode($arr);
}

openlog("szamla_lekeres", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();


?>