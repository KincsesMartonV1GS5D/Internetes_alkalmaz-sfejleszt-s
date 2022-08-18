<?php

$sql = "SELECT * FROM termekek_es_szolgaltatasok";
$conn = new mysqli("localhost", "root", "", "V1GS5D");

$result = $conn -> query($sql);
//echo $result -> num_rows;


if($result -> num_rows > 0){
    $arr = array();
    while ($row = $result->fetch_assoc()) {
        array_push($arr, array('id' => $row['ID'], 'nev' => $row['Nev'], 'tipus' => $row['Tipus'], 'keszlet' => $row['Keszleten'], 'ar' => $row['Ar']));
    }
    echo json_encode($arr);
}

openlog("termekek_lekeres", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();


?>