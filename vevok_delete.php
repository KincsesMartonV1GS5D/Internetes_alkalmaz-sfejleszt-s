<?php
$id = $_POST["id"];

$sql = "DELETE FROM Vevok 
    WHERE VevoID = $id AND (
    SELECT COUNT(VevoID) FROM Szamla
	WHERE VevoID = $id) = 0
";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   

openlog("vevok_delete", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>