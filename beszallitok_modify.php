<?php
$id = $_POST["id"];
$nev = $_POST["nev"];
$termek = $_POST["termek"];
$Ar = $_POST["Ar"];
echo $id . " " . $nev . " " . $termek . " " . $Ar . " " ;
$sql = "UPDATE beszallitok SET beszallitoNev = '$nev', Termek_Es_Szolgaltatas_ID = '$termek', Ar = '$Ar' WHERE beszallitoID = '$id'";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   
openlog("beszallitok_modify", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();
?>