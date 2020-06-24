<?php
include 'Nav.php';
?>

<body>

    <?php
    if (@$_GET['signupEmpty'] == true) {
        echo "<div>";
        echo $_GET['signupEmpty'];
        echo "</div>";
    }
    ?>
    <?php
    if (@$_GET['signupFailed'] == true) {
        echo "<div>";
        echo $_GET['signupFailed'];
        echo "</div>";
    }
    ?>
    <div class="flex-container">
        <div>

            <form action="includes/signup.php" class="flex_Signup" method="POST">
                <h1 class="header">Sign Up</h1>
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
                <button type="submit" name="submit">Sign up!</button>
            </form>
        </div>
    </div>

</body>