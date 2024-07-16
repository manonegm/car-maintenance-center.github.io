<?php

$email = $_POST["email"];
$pass = $_POST["pass"];


$host = "localhost";
$username = "root";
$password = "";
$dbname = "user data";

$conn = new mysqli ($host , $username , $password , $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, pass FROM datas WHERE (email = '$email' and pass = '$pass') ";

if ($conn->Query($sql)->num_rows > 0) {
    header('Location: home.html');
  } else {
    header('Location: wep project.html');
    
  }
?>