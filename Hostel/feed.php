<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fe.css">
</head>
<body>
    <form action="send.php" method="POST">
        <fieldset>
            <legend>FEEDBACK</legend>
            <label for="username">Username:</label><br>
        <input type="text" class="regno" id="regno" placeholder="regno" name="regno"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" class="email" id="email" placeholder="email" name="email"><br><br>

        <label for="message">Message:</label><br>
        <textarea placeholder="Write your message..." class="message" name="message"></textarea>
        <br><br>
        <input type="submit" value="Submit" class="btn">
        </fieldset>
        
    </form>
    <script src="script.js"></script>
</body>
</html>