<?php
include_once "dbconnect.php";
function setSession($username)
{
    $_SESSION["username"] = "$username";
    if (!isset($_SESSION['username'])) {
        echo "You are not logged in!";
    } else {
        echo "You are logged in as: " . $_SESSION['$username'];
    }
}
