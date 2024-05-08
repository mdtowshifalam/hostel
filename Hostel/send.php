<?php
$conn= mysqli_connect('localhost','root','','hms');

if(!$conn){
    die("Can not connect" . mysqli_connect_error());
}
    $regno=$_POST['regno'];
    $email=$_POST['email'];
    $message=$_POST['message'];


$sql = "INSERT INTO greetings (username, email, message) VALUES ('$regno', '$email', '$message')";

if(mysqli_query($conn, $sql)){
    echo ("Data added Successfully");
}
else {
    echo "Something went wrong";
}


?>

