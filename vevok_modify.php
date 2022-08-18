<?php
$id = $_POST["id"];
$nev = $_POST["nev"];
$Vett_termekek = $_POST["Vett_termekek"];
echo $id . " " . $nev . " " . $Vett_termekek . " " ;
$sql = "UPDATE Vevok SET VevoNev = '$nev', Vett_termekek = '$Vett_termekek' WHERE VevoID = '$id'";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   

openlog("vevok_modify", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>