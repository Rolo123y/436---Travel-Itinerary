<?php

function GetCombinations(
    $DepartureDate,
    $DepartureCity,
    $DestinationCity,
    $ReturnDate,
    $FlightClass,
$conn    
) {

    $DepartureDate_ = mysqli_real_escape_string($conn, $DepartureDate);
    $DepartureCity_ = mysqli_real_escape_string($conn, $DepartureCity);
    $DestinationCity_ = mysqli_real_escape_string($conn, $DestinationCity);
    $ReturnDate_ = mysqli_real_escape_string($conn, $ReturnDate);
    $FlightClass_ = mysqli_real_escape_string($conn, $FlightClass);

    $sql_1 = "SELECT * FROM flights WHERE departure_city = '" . $DepartureCity_ . "' AND departure_date LIKE '" . $DepartureDate_ . "' AND arrival_city LIKE '" . $DestinationCity_ . "' AND flight_class LIKE '" . $FlightClass_ . "'";
    $sql_2 = "SELECT * FROM flights WHERE departure_city = '" . $DestinationCity_ . "' AND departure_date LIKE '" . $ReturnDate_ . "' AND arrival_city LIKE '" . $DepartureCity_ . "' AND flight_class LIKE '" . $FlightClass_ . "';";
    $sql = $sql_1 . " UNION " . $sql_2;
    $result = mysqli_query($conn, $sql);
    
    $resulCheck = mysqli_num_rows($result);

    if ($resulCheck > 0) {
	    return $result;
    } else {
        echo "no records found";

    }
	

}
