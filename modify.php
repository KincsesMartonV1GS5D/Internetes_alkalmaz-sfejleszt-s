<?php
$id = $_POST["id"];
$nev = $_POST["nev"];
$tipus = $_POST["tipus"];
$keszlet = $_POST["keszlet"];
$ar = $_POST["ar"];
echo $id . " " . $nev . " " . $tipus . " " . $keszlet . " " . $ar . " " ;
$sql = "UPDATE Termekek_Es_Szolgaltatasok SET Nev = '$nev', Tipus = '$tipus',Keszleten = '$keszlet', Ar = '$ar' WHERE ID = '$id'";
$conn = new mysqli("localhost", "root", "", "V1GS5D");
if($conn -> query($sql) === TRUE){
    echo "sikerult";
}else{
    echo $conn -> error;
}   

openlog("termekek_modify", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>