<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>

<body>
    <form action="send.php" method="post">
        Email: <input type="email" name="email"><br>
        Subject: <input type="text" name="subject"><br>
        Message: <input type="text" name="message">
        <button type="submit" name="send">Send</button>

    </form>
</body>

</html>