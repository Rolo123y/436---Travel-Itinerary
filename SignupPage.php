<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <h1 class = "header">Sign Up Page</h1>
    <form action="includes/signup.php" method="POST">
        <input type="text" name="first" placeholder="Firstname">
        <br>
        <input type="text" name="last" placeholder="Lastname">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
</body>

</html>