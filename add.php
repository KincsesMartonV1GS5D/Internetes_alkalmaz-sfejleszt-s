<?php
$id = $_POST["id"];
$nev = $_POST["nev"];
$tipus = $_POST["tipus"];
$keszlet = $_POST["keszlet"];
$ar = $_POST["ar"];
echo $id . " " . $nev . " " . $tipus . " " . $keszlet . " " . $ar . " " ;
$sql = "INSERT INTO Termekek_Es_Szolgaltatasok (Nev,Tipus,Keszleten,Ar) VALUES ('$nev','$tipus','$keszlet','$ar')";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   

openlog("termekek_add", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>