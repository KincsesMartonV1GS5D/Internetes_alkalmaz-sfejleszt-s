<?php
$id = $_POST["id"];

$sql = "DELETE FROM Termekek_Es_Szolgaltatasok 
    WHERE ID = $id AND (
    SELECT COUNT(Termek_Es_Szolgaltatas_ID) FROM beszallitok
	WHERE Termek_Es_Szolgaltatas_ID = $id) = 0
";
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