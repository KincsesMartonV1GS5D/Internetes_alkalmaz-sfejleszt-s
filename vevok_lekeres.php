<?php

$sql = "SELECT * FROM Vevok";
$conn = new mysqli("localhost", "root", "", "V1GS5D");

$result = $conn -> query($sql);
//echo $result -> num_rows;


if($result -> num_rows > 0){
    $arr = array();
    while ($row = $result->fetch_assoc()) {
        array_push($arr, array('id' => $row['VevoID'], 'nev' => $row['VevoNev'], 'Vett_termekek' => $row['Vett_termekek']));
    }
    echo json_encode($arr);
}

openlog("vevok_lekeres", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>