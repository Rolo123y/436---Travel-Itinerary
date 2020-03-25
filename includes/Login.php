<?php
session_start();
include_once "dbconnect.php";

if (isset($_POST['submit'])) {
    if (empty($_POST['uid']) || empty($_POST['pwd'])) {
        header("Location: ../index.php?Empty=Please fill in empty fields");
    } else {
        LogInCheck($_POST['uid'], $_POST['pwd'], $conn);
    }
}

function LogInCheck($uid, $pwd, $conn)
{
    $uid_ = mysqli_real_escape_string($conn, $uid);
    $pwd_ = mysqli_real_escape_string($conn, $pwd);

    $sql = "SELECT * FROM users where user_uid LIKE '" . $uid_ . "' AND user_pwd LIKE '" . $pwd_ . "';";
    $result = mysqli_query($conn, $sql);
    $resulCheck = mysqli_num_rows($result);

    if ($resulCheck > 0 && $resulCheck < 2) {
        $_SESSION['user_uid'] = $uid;
        header("Location: ../Page1_.php?Login=success");
    } else {
        header("Location: ../index.php?Empty=email or password incorrect. Try again!");
    }
}
