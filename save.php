<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <p>
        user name: <?php echo $_POST["name"] ?>
    </p>
    <p>
        user email: <?php echo $_POST["email"] ?>
    </p>
    <p>
        user message: <?php echo $_POST["message"] ?>
    </p>
    <?php 
        $myfile = fopen("messages.txt", "a");
        fwrite($myfile, $_POST["name"]);
        fwrite($myfile, ",");
        fwrite($myfile, $_POST["email"]);
        fwrite($myfile, ",");
        fwrite($myfile, $_POST["message"]);
        fwrite($myfile, "<br>");
    ?>
</body>
</html>