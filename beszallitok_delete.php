<?php
$id = $_POST["id"];

$sql = "DELETE FROM beszallitok 
    WHERE beszallitoID = $id
";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   
openlog("beszallitok_delete", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();
?>