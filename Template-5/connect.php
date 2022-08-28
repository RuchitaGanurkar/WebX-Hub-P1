 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="my_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$con) {
die('Connection failed: ' . mysql_error());
}else{
//echo "Database Connected successfully"; // in case of success
}
?>


