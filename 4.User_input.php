<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="4.User_input.php" method="get">
        Name: <input type="text" name="username">
        <button type="submit">
            Submit</button>
    </form>
    <?php
    echo "Your name is: " . $_GET["username"];
    ?>
</body>

</html>