<?php
$id = $_POST["id"];
$nev = $_POST["nev"];
$tipus = $_POST["tipus"];
$keszlet = $_POST["keszlet"];
$ar = $_POST["ar"];
echo $id . " " . $nev . " " . $tipus . " " . $keszlet . " " . $ar . " " ;
$sql = "DELETE FROM Termekek_Es_Szolgaltatasok WHERE ID = ";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   

openlog("termekek_delete", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>