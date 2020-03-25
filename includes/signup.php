<?php
include_once 'dbconnect.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['first']) || empty($_POST['last']) || empty($_POST['email']) || empty($_POST['uid']) || empty($_POST['pwd'])) {
        header("Location: ../SignupPage.php?signupEmpty=Please fill in empty fields");
    } else {
        SignupCheck($_POST['first'], $_POST['last'], $_POST['email'], $_POST['uid'], $_POST['pwd'], $conn);
    }
}

function SignupCheck($first, $last, $email, $uid, $pwd, $conn)
{
    $first_ = mysqli_real_escape_string($conn, $first);
    $last_ = mysqli_real_escape_string($conn, $last);
    $email_ = mysqli_real_escape_string($conn, $email);
    $uid_ = mysqli_real_escape_string($conn, $uid);
    $pwd_ = mysqli_real_escape_string($conn, $pwd);

    $sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd)
        VALUES ('$first_','$last_','$email_','$uid_','$pwd_');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../index.php?signup=success");
    } else {
        header("Location: ../SignupPage.php?signupFailed= Failed to signup");
    }
}
