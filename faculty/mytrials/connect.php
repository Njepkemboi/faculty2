<?php
$name=$_POST ['name'];
$email=$_POST ['email'];
$password=$_POST ['password'];
$confirm_password=$_POST ['confirm_password'];
$message=$_POST ['message'];



// connecting to database
$conn = new mysqli('localhost','root', '', 'mytest');
if ($conn->connect_error) {
    die('Connection Failed  : ' .$conn->connect_error);
}else {
        $stmt =$conn->prepare("insert into students(name,email,password, confrim_password, message)
        values(?,?,?,?,?)");
       $smtp-> bind_param ("sssss", $name, $email, $password, $confrim_password, $message);
       $stmt->execute();
       echo "registration successfully...";
       $stmt->close();
       $conn->close();
       
    }


?>
