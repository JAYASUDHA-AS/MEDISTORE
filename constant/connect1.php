<?php
/* Local Database*/

$servername = "127:0:0:1:3307";
$username = "root";
$password = "";
$dbname = "NOWDEMY_pharmacy";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 