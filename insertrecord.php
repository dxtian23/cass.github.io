<?php
include_once 'db_connection.php';
if(isset($_POST['submit']))
{
$fullname = $_POST['fullname'];
$id = $_POST['id'];
$gender = $_POST['gender'];
$town = $_POST['town'];
$zip = $_POST['zip'];
$date = $_POST['date'];
$barangay = $_POST['barangay'];
$var = $_POST['var'];
$area = $_POST['area'];



$sql = "INSERT INTO planting (fullname, id, gender, town, zip, date, barangay, var, area)
VALUES ('$fullname', '$id', '$gender','$town','$zip','$date','$barangay','$var','$area')";
if (mysqli_query($conn,$sql)) {
	header("location:record.php");
	} else {
		echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
		}
		mysqli_close($mysqli);
		}
?>
