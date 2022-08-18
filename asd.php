<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = file_get_contents('query.sql');

$result = $conn->multi_query($sql);

openlog("connection", LOG_INFO, LOG_USER);
syslog(LOG_INFO, $sql);
closelog();

?>