<?php
include "Nav.php";
include "Combinations.php";
?>

<head>
    <title>Page 1</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
</head>

<body>

    <div class="flex-container_Page2">
        <!-- <div>
            <h1 class="header">Page 2</h1>
        </div> -->

        <div class="Page2_Center">
            <form action="includes/Page_2_Inputs.php" class="flex_Page2" method="POST">

                <div id="DepartureDate_Page2" class="input-group date" date-date-format="yyyy-mm-dd">
                    <input type="text" name="DepartureDate_Page2" placeholder="Select a Departure Date" value=<?php echo isset($_GET["DepartureDate"]) ? $_GET['DepartureDate'] : "" ?>>
                    <span class="input-group-addon">
                    </span>
                </div>

                <script>
                    $(function() {
                        $('#DepartureDate_Page2').datepicker({
                            format: "dd/mm/yyyy",
                            autoclose: true,
                            todayHighlight: true,
                            showOtherMonths: true,
                            selectOtherMonths: true,
                            autoclose: true,
                            changeMonth: true,
                            changeYear: true,
                        });
                    });
                </script>

                <select name="DepartureCity" required>
                    <option value="" disabled selected>Departure City</option>
                    <option value="Chicago" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Chicago" ? "selected" : "" ?>>Chicago</option>
                    <option value="Chicago-Midway" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Chicago-Midway" ? "selected" : "" ?>>Chicago-Midway</option>
                    <option value="Toronto" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Toronto" ? "selected" : "" ?>>Toronto</option>
                </select>

                <div id="ArrivalDate_Page2" class="input-group date" date-date-format="yyyy-mm-dd">
                    <input type="text" name="ArrivalDate_Page2" placeholder="Select an Arrival Date" value=<?php echo isset($_GET["ArrivalDate"]) ? $_GET['ArrivalDate'] : "" ?>>
                    <span class="input-group-addon">
                    </span>
                </div>

                <script>
                    $(function() {
                        $('#ArrivalDate_Page2').datepicker({
                            format: "dd/mm/yyyy",
                            autoclose: true,
                            todayHighlight: true,
                            showOtherMonths: true,
                            selectOtherMonths: true,
                            autoclose: true,
                            changeMonth: true,
                            changeYear: true,
                        });
                    });
                </script>

                <select name="DestinationCity" required>
                    <option value="" disabled selected>Destination City</option>
                    <option value="Chicago" <?php echo isset($_GET["DestinationCity"]) && $_GET["DestinationCity"] == "Chicago" ? "selected" : "" ?>>Chicago</option>
                    <option value="Toronto" <?php echo isset($_GET["DestinationCity"]) && $_GET["DestinationCity"] == "Toronto" ? "selected" : "" ?>>Toronto</option>
                </select>

                <select name="NumOfPeople" required>
                    <option value="" disabled selected>number of people</option>
                    <option value="1" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "1" ? "selected" : "" ?>>1</option>
                    <option value="2" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "2" ? "selected" : "" ?>>2</option>
                    <option value="3" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "3" ? "selected" : "" ?>>3</option>
                    <option value="4" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "4" ? "selected" : "" ?>>4</option>
                    <option value="5" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "5" ? "selected" : "" ?>>5</option>
                    <option value="6" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "6" ? "selected" : "" ?>>6</option>
                </select>

                <select name="FlightClass" required>
                    <option value="" disabled selected>Flight Class</option>
                    <option value="B" <?php echo isset($_GET["FlightClass"]) && $_GET["FlightClass"] == "B" ? "selected" : "" ?>>B</option>
                    <option value="E" <?php echo isset($_GET["FlightClass"]) && $_GET["FlightClass"] == "E" ? "selected" : "" ?>>E</option>
                </select>

                <select name="TypeOfVisit" required>
                    <option value="" disabled selected>type of visit</option>
                    <option value="Business" <?php echo isset($_GET["TypeOfVisit"]) && $_GET["TypeOfVisit"] == "Business" ? "selected" : "" ?>>Business</option>
                    <option value="Pleasure" <?php echo isset($_GET["TypeOfVisit"]) && $_GET["TypeOfVisit"] == "Pleasure" ? "selected" : "" ?>>Pleasure</option>
                </select>

                <select name="tripfeatures" required>
                    <option value="" disabled selected>type of feature</option>
                    <option value="Adventure" <?php echo isset($_GET["tripfeatures"]) && $_GET["tripfeatures"] == "Adventure" ? "selected" : "" ?>>Adventure</option>
                    <option value="cultural" <?php echo isset($_GET["tripfeatures"]) && $_GET["tripfeatures"] == "cultural" ? "selected" : "" ?>>cultural</option>
                    <option value="ecotourism" <?php echo isset($_GET["tripfeatures"]) && $_GET["tripfeatures"] == "ecotourism" ? "selected" : "" ?>>ecotourism</option>
                    <option value="water sports" <?php echo isset($_GET["tripfeatures"]) && $_GET["tripfeatures"] == "water sports" ? "selected" : "" ?>>water sports</option>

                </select>

                <input type="text" name="budget" placeholder="Enter your budget">
                <button type="Submit" name="Submit">Continue</button>

            </form>
        </div>

        <form method="GET">
            <h2 class="header">Combinations
                <button type="Update" name="Update">Update</button>
            </h2>
        </form>
        
        <?php
        // Enable error logging: 
        error_reporting(E_ALL ^ E_NOTICE);
        // mysqli connection via user-defined function
        include ('./my_connect.php');
        $mysqli = get_mysqli_conn();
        ?>


        <?php
        // $flight_query = "SELECT s.airlines, s.departure_city, s.departure_time, s.arrival_city, s.arrival_time, s.flight_cost FROM flights s";
        // $sql = $flight_query;//add the clauses to the base query
        // //prepare statement
        // $stmt = $mysqli->prepare($sql);
        // //execute statement
        // $stmt->execute();
        // //bind results 
        // $stmt->bind_result($airlines, $departure_city , $departure_time, $arrival_city, $arrival_time, $flight_cost);
        // ?>
        <!-- // <table id ="Combinations_Page2">
        // <tr>
        //     <th>Airline</th>
        //     <th>Departure City</th>
        //     <th>Departure Time</th>
        //     <th>Arrival City</th>
        //     <th>Arrival Time</th>
        //     <th>Cost</th>
        // </tr> -->
        //     <?php
        //     while($stmt->fetch())
        //     {
        //         echo '<tr>';
        //         echo '<td>'.$airlines.'</td>';
        //         echo '<td>'.$departure_city.'</td>';
        //         echo '<td>'.$departure_time.'</td>';
        //         echo '<td>'.$arrival_city.'</td>';
        //         echo '<td>'.$arrival_time.'</td>';
        //         echo '<td>'.$flight_cost.'</td>';
        //         echo '</tr>';
        //     }
        //     $stmt->close();
            ?>
        </table>
        
        <?php
        $hotel_query = "SELECT h.hotel_name, h.checkIn, h.checkOut, h.price_per_night, h.tripadvisor_rating FROM hotels h";
        $sql = $hotel_query;//add the clauses to the base query
        //prepare statement
        $stmt = $mysqli->prepare($sql);
        //execute statement
        $stmt->execute();
        //bind results 
        $stmt->bind_result($hotel_name, $checkIn , $checkOut, $price, $rating);
        ?>
        <table id ="Combinations_Page2">
        <tr>
            <th>Hotel</th>
            <th>Check In Date</th>
            <th>Check Out Date</th>
            <th>Price per night</th>
            <th>Rating</th>
        </tr>
            <?php
            while($stmt->fetch())
            {
                echo '<tr>';
                echo '<td>'.$hotel_name.'</td>';
                echo '<td>'.$checkIn.'</td>';
                echo '<td>'.$checkOut.'</td>';
                echo '<td>'.$price.'</td>';
                echo '<td>'.$rating.'</td>';
                echo '</tr>';
            }
            $stmt->close();
            ?>
        </table>
    <?php
        // if (isset($_GET['Update'])) {
        //     echo "<table id=" . '"Combinations_Page2"' . "";
        //     echo "<tr>";
        //     echo "<th>Departure date</th>";
        //     echo "<th>Departure city</th>";
        //     echo "<th>Arrival date</th>";
        //     echo "<th>Destination city</th>";
        //     echo "<th>Number of people</th>";
        //     echo "<th>Flight class</th>";
        //     echo "<th>Type of Visit</th>";
        //     echo "<th>Trip Features</th>";
        //     echo "</tr>";

        //     echo "<tr>";
        //     echo "<td>A</td>";
        //     echo "<td>B</td>";
        //     echo "<td>A</td>";
        //     echo "<td>A</td>";
        //     echo "<td>A</td>";
        //     echo "<td>A</td>";
        //     echo "<td>A</td>";
        //     echo "<td>A</td>";
        //     echo "</tr>";
        //     echo "</table";

            // while ($row = mysqli_fetch_array(GetCombinations(
            //     $_GET['DepartureDate'],
            //     $_GET['DepartureCity'],
            //     $_GET['ArrivalDate'],
            //     $_GET['DestinationCity'],
            //     $_GET['NumOfPeople'],
            //     $_GET['FlightClass'],
            //     $_GET['TypeOfVisit'],
            //     $_GET['tripfeatures'],
            //     $conn
            // ))) {
            //     echo "<tr>";
            //     echo "<td>" . $row['DepartureDate'] . "</td>";
            //     echo "<td>" . $row['DepartureCity'] . "</td>";
            //     echo "<td>" . $row['ArrivalDate'] . "</td>";
            //     echo "<td>" . $row['DestinationCity'] . "</td>";
            //     echo "<td>" . $row['NumOfPeople'] . "</td>";
            //     echo "<td>" . $row['FlightClass'] . "</td>";
            //     echo "<td>" . $row['TypeOfVisit'] . "</td>";
            //     echo "<td>" . $row['tripfeatures'] . "</td>";
            //     echo "</tr>";
            // }
            // mysqli_close($con);
        // }
        ?>


        <div class="combination_div">
            <table id="Combinations_Page2">

                <th>Departure date</th>
                <th>Departure city</th>
                <th>Arrival date</th>
                <th>Destination city</th>
                <th>Number of people</th>
                <th>Flight class</th>
                <th>Type of Visit</th>
                <th>Trip Features</th>

                <tbody>
                    <?php
                    if (isset($_GET['Update'])) {
                        // echo "<table id=" . '"Combinations_Page2"' . "";
                        // echo "<tr>";
                        // echo "<th>Departure date</th>";
                        // echo "<th>Departure city</th>";
                        // echo "<th>Arrival date</th>";
                        // echo "<th>Destination city</th>";
                        // echo "<th>Number of people</th>";
                        // echo "<th>Flight class</th>";
                        // echo "<th>Type of Visit</th>";
                        // echo "<th>Trip Features</th>";
                        // echo "</tr>";

                        for ($i = 0; $i < 15; $i++) {
                            echo "<tr>";
                            echo "<td>A</td>";
                            echo "<td>B</td>";
                            echo "<td>A</td>";
                            echo "<td>A</td>";
                            echo "<td>A</td>";
                            echo "<td>A</td>";
                            echo "<td>A</td>";
                            echo "<td>A</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table";





                        // while ($row = mysqli_fetch_array(GetCombinations(
                        //     $_GET['DepartureDate'],
                        //     $_GET['DepartureCity'],
                        //     $_GET['ArrivalDate'],
                        //     $_GET['DestinationCity'],
                        //     $_GET['NumOfPeople'],
                        //     $_GET['FlightClass'],
                        //     $_GET['TypeOfVisit'],
                        //     $_GET['tripfeatures'],
                        //     $conn
                        // ))) {
                        //     echo "<tr>";
                        //     echo "<td>" . $row['DepartureDate'] . "</td>";
                        //     echo "<td>" . $row['DepartureCity'] . "</td>";
                        //     echo "<td>" . $row['ArrivalDate'] . "</td>";
                        //     echo "<td>" . $row['DestinationCity'] . "</td>";
                        //     echo "<td>" . $row['NumOfPeople'] . "</td>";
                        //     echo "<td>" . $row['FlightClass'] . "</td>";
                        //     echo "<td>" . $row['TypeOfVisit'] . "</td>";
                        //     echo "<td>" . $row['tripfeatures'] . "</td>";
                        //     echo "</tr>";
                        // }
                        // mysqli_close($con);
                    }
                    ?>
        </div>
    </div>

</body>