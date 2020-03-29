<?php

function GetCombinations(
    $DepartureDate,
    $DepartureCity,
    $ArrivalDate,
    $DestinationCity,
    $NumOfPeople,
    $FlightClass,
    $TypeOfVisit,
    $tripfeatures,
    $conn
) {

    $DepartureDate_ = mysqli_real_escape_string($conn, $DepartureDate);
    $DepartureCity_ = mysqli_real_escape_string($conn, $DepartureCity);
    $ArrivalDate_ = mysqli_real_escape_string($conn, $ArrivalDate);
    $DestinationCity_ = mysqli_real_escape_string($conn, $DestinationCity);
    $NumOfPeople_ = mysqli_real_escape_string($conn, $NumOfPeople);
    $FlightClass_ = mysqli_real_escape_string($conn, $FlightClass);
    $TypeOfVisit_ = mysqli_real_escape_string($conn, $TypeOfVisit);
    $tripfeatures_ = mysqli_real_escape_string($conn, $tripfeatures);

    $sql = "SELECT * FROM User;";
    $result = mysqli_query($conn, $sql);
    $resulCheck = mysqli_num_rows($result);

    if ($resulCheck > 0) {
        return $result;
    } else {
        echo "no records found";
    }
}
