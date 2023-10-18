<?php

$servername= 'localhost';
$username= 'root';
$password= '';
$dbname= "cassdb";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){
	die('Could not Connect MySql Server:' .mysql_error());
}
function filterRecord($query) {
    global $conn; // Make the database connection variable available in the function

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    return $result;
}
?>