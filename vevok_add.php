<?php
$id = $_POST["id"];
$nev = $_POST["nev"];
$Vett_termekek = $_POST["Vett_termekek"];
echo $id . " " . $nev . " " . $Vett_termekek . " " ;
$sql = "INSERT INTO Vevok (VevoNev,Vett_termekek) VALUES ('$nev','$Vett_termekek')";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   

openlog("vevok_add", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>