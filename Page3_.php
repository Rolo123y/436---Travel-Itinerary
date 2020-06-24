<?php
include "Nav.php";
include "includes/optimization.php"
?>

<head>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>

<body>
    
<div class="flex-container_Page2">
<h1 class="header">Your budget for <?php echo $_GET['NumOfPeople']." person(s) is:".$_GET['Budget'] ?>
<a href="Page2_.php" class="Go-Back">&larr; Go Back</a>
<button id="ExportExcel" name="ExportExcel" class = "ExportExcel">Export to Excel</button>
</h1>

<div class="combination_div">
            <table id="Combinations_Page2">

                <th>Airline</th>
		<th>Destination</th>
                <th>Hotel Name</th>
                <th>Hotel Rating</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Flight Cost per person</th>
                <th>Hotel Cost per night</th>
                <th>Total Cost</th>
    <?php

    $result = optimize(
	$_GET['DepartureDate'],
        $_GET['DepartureCity'],
        $_GET['DestinationCity'],
	$_GET['ReturnDate'],
        $_GET['FlightClass'],
	$_GET['NumOfPeople'],
        $_GET['HotelRating'],
        $_GET['flightBudgetSplit'],
        $_GET['HotelBudgetSplit'],
	$conn);

    // echo mysqli_fetch($result)
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['flight_details'] . "</td>";
        echo "<td>" . $row['arrival_city'] . "</td>";
	echo "<td><a href=".$row['url'].">" . $row['hotel_name'] . "</a></td>";
        echo "<td>" . $row['tripadvisor_rating'] . "</td>";
        echo "<td>" . $row['checkIn'] . "</td>";
        echo "<td>" . $row['checkOut'] . "</td>";
        echo "<td>" . $row['flight_cost'] . "</td>";
        echo "<td>" . $row['price_per_night'] . "</td>";
        echo "<td>" . $row['total cost'] . "</td>";
        echo "</tr>";
    };
    
    mysqli_close($conn);            
                ?>
    	</table>
    </div>
    <h2 class="header">These are the 10 best combinations</h2>
</div>

<script>
 $(document).ready(function() {
                $('#ExportExcel').click(function() {
                    var excel_data = $('#Combinations_Page2').html();
                    var page = "includes/excel.php?data=" + excel_data;
                    window.location = page;
                });
            });
</script>

</body>