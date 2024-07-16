<?php 
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST["pass"];
$phone = $_POST["phone"];
$model = $_POST["model"];


$host = "localhost";
$username = "root";
$password = "";
$dbname = "user_data";

$conn = new mysqli ($host , $username , $password , $dbname);
if ($conn -> connect_error){

    die ("connection failed : " . $conn->connect_error );
}

$sql = "INSERT INTO datas (user,email,pass,phone,model)
-- VALUES ('joe@gmial.com' ,'joe666' , '123456','01278290565','BMW');
 VALUES ('$user' , '$email' ,'$pass','$phone','$model')";

if ( $conn -> query($sql)===TRUE){
    ECHO "new record created";
    header('Location: wep project.html');
}
else{
    echo "error: ". $sql . "<br>" . $conn->error;
}
?>