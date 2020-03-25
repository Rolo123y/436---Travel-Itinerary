<?php
if (isset($_POST['Submit'])) {
    $value = $_POST['name'];
    header("location: ../Page1_.php?Value=" . $value);
}
