<?php
// include_once 'index.php';

$name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["pass"];
$phone = $_POST["phone"];
$model = $_POST["car type"];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "user data";

$sql ="INSERT INTO datas (username,email,pass,phone,car type)
VALUES ('joe666' , 'joe@gmial.com' ,'123456','01278290565','BMW');";
 mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE){
    echo "New rec created";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>