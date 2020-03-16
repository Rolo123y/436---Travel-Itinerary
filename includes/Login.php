<?php
include_once 'dbconnect.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "SELECT * FROM users where user_email like " . $email . " AND user_pwd like " . $pwd . ";";
$Result = mysqli_query($conn, $sql);
$resulCheck = mysqli_num_rows($result);

if ($resulCheck > 0) {
    include "SetSession.php";
    header("Location: ../index.php?Login=success");
}
