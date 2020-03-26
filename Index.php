<?php
// include_once 'includes/dbconnect.php';
include 'Nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>MSCI 436 Travel Itinerary</title>
</head>

<body>

    <?php
    if (@$_GET['Empty'] == true) {
        echo "<div>";
        echo $_GET['Empty'];
        echo "</div>";
    }
    ?>
    <div class="flex-container">
        <div>
            <h1 class="header">Log In</h1>
            <form action="includes/Login.php" class="flex_Index" method="POST">
                <input type="text" name="uid" placeholder="Username">
                <br>
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>
    </div>

</body>