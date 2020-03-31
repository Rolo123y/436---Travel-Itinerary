<?php

function optimize(
    $DepartureDate,
    $DepartureCity,
    $DestinationCity,
    $ReturnDate,
    $FlightClass,
    $people,
    $hotel_rating,
    $flightbudget_split,
    $hotelbudget_split,
    $conn
){
    $DepartureDate_ = mysqli_real_escape_string($conn, $DepartureDate);
    $DepartureCity_ = mysqli_real_escape_string($conn, $DepartureCity);
    $DestinationCity_ = mysqli_real_escape_string($conn, $DestinationCity);
    $FlightClass_ = mysqli_real_escape_string($conn, $FlightClass);
    $ReturnDate_ = mysqli_real_escape_string($conn, $ReturnDate);

    $flight_budget = $flightbudget_split;
    $hotel_budget = $hotelbudget_split;
	
    $sql_2 = "SELECT flights.airlines, flights.arrival_city,hotels.hotel_name, flight_cost, price_per_night, (".$people."*flights.flight_cost + hotels.price_per_night) AS 'total cost', hotels.tripadvisor_rating, hotels.checkIn, hotels.checkOut, hotels.hotel_features, flights.flight_details, hotels.url FROM hotels left JOIN flights ON  hotels.city = flights.arrival_city WHERE hotels.checkOut = '".$ReturnDate_."' AND flights.arrival_city='".$DestinationCity_."' AND flights.departure_city ='".$DepartureCity_."' AND flights.departure_date ='".$DepartureDate_."' AND  (".$people."*flights.flight_cost) <".$flight_budget."  AND flights.departure_date = hotels.checkIn AND hotels.price_per_night <".$hotel_budget." AND hotels.tripadvisor_rating=".$hotel_rating." AND flights.stops = 0 ORDER BY (flights.flight_cost+hotels.price_per_night) ASC LIMIT 10;";
    $result = mysqli_query($conn, $sql_2);
    
    $resulCheck = mysqli_num_rows($result);
    if ($resulCheck > 0) {
	    return $result;
    } else {
        echo "no records found";

    }
}