
<?php

function places(
    $tripType,
    $city,
    $conn
)
{
    $sql = "SELECT attraction FROM ".$tripType." WHERE city='".$city."';";
    $result = mysqli_query($conn, $sql_2);
    
    $resulCheck = mysqli_num_rows($result);
    if ($resulCheck > 0) {
	    return $result;
    } else {
        echo "no records found";

    }
}