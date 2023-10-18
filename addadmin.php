<?php
session_start();
include_once 'db_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO sadl (name, user, pass) VALUES ('$name', '$username', '$password')";

    if (mysqli_query($conn,$sql)) {

        $_SESSION['status']="Data Inserted Successfully";
        header("location:nav.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
            }
            mysqli_close($mysqli);
    }

?>
