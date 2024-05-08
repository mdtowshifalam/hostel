<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fe.css">
    <?php
    $email="";
    $regno="";
    $message="";
    

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
$conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());
if(isset($_POST['regno']) && isset($_POST['email']) && isset($_POST['message']) ){

    $regno=$_POST['regno'];
    $email=$_POST['email'];
    $message=$_POST['message'];



    $sql = "INSERT INTO `greetings`(`regno`,`email`,`message`) VALUES ('$regno', '$email', '$message')";
    if(mysqli_query($conn, $sql)){
        echo ("Data added Successfully");
    }
    else {
        echo "Something went wrong";
    }

}
}
?>
</head>
<body>
<?php       session_start(); ?>
    <form action="connect.php" method="POST">
        <fieldset>
            <legend>FEEDBACK</legend>
            <label for="username">Registration Number:</label><br>
            <input type="text" placeholder="Enter your regno" name="regno" value="<?php echo "$regno"; ?>" pattern="[A-Z]{2}[0-9]{4}" required>
                <br>
        <label for="emails">Email:</label><br>
        <input type="text" placeholder="Enter your email" name="email" value="<?php echo "$email"; ?>" required>
            <br>
        <label for="messages">Message:</label><br>
        <textarea placeholder="Write your message..." name="message" name="message" value="<?php echo "$message"; ?>"></textarea>
        <br><br>
        <input type="submit" value="Submit" class="btn">
        </fieldset>
        
    </form>
    <script src="script.js"></script>
</body>
</html>