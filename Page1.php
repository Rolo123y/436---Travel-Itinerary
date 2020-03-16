<?php
include "Nav.php";
?>

<body>
    <h1 class = "header">Page 1</h1>

    <form method="POST">
        <input type="hidden" name="name" value="THE HIDDEN VALUE!">
        <button type="Press_Me" name="Submit">PRESS ME!</button>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $value = $_POST['name'];
        echo $value;
    }
    ?>
</body>

</html>