<?php
include_once 'includes/dbconnect.php';
include 'Nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1 class="header">Log In Page</h1>

    <?php
    if (@$_GET['Empty'] == true) {
        echo "<div>";
        echo $_GET['Empty'];
        echo "</div>";
    }
    ?>

    <form action="includes/Login.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Log In</button>
    </form>

</body>


</html>