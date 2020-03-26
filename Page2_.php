<?php
include "Nav.php";
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
        <div>
            <h1 class="header">Page 2
                <button type="Submit" name="Submit">Continue</button>
            </h1>
        </div>

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
                    <option value="" disabled selected>Select a Departure City</option>
                    <option value="Volvo" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Volvo" ? "selected" : "" ?>>Volvo</option>
                    <option value="Saab" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Saab" ? "selected" : "" ?>>Saab</option>
                    <option value="Mercedes" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Mercedes" ? "selected" : "" ?>>Mercedes</option>
                    <option value="Audi" <?php echo isset($_GET["DepartureCity"]) && $_GET["DepartureCity"] == "Audi" ? "selected" : "" ?>>Audi</option>
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
                    <option value="" disabled selected>Select a Destination City</option>
                    <option value="Volvo" <?php echo isset($_GET["DestinationCity"]) && $_GET["DestinationCity"] == "Volvo" ? "selected" : "" ?>>Volvo</option>
                    <option value="Saab" <?php echo isset($_GET["DestinationCity"]) && $_GET["DestinationCity"] == "Saab" ? "selected" : "" ?>>Saab</option>
                    <option value="Mercedes" <?php echo isset($_GET["DestinationCity"]) && $_GET["DestinationCity"] == "Mercedes" ? "selected" : "" ?>>Mercedes</option>
                    <option value="Audi" <?php echo isset($_GET["DestinationCity"]) && $_GET["DestinationCity"] == "Audi" ? "selected" : "" ?>>Audi</option>
                </select>

                <select name="NumOfPeople" required>
                    <option value="" disabled selected>Select the number of people</option>
                    <option value="Volvo" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "Volvo" ? "selected" : "" ?>>Volvo</option>
                    <option value="Saab" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "Saab" ? "selected" : "" ?>>Saab</option>
                    <option value="Mercedes" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "Mercedes" ? "selected" : "" ?>>Mercedes</option>
                    <option value="Audi" <?php echo isset($_GET["NumOfPeople"]) && $_GET["NumOfPeople"] == "Audi" ? "selected" : "" ?>>Audi</option>
                </select>

                <select name="FlightClass" required>
                    <option value="" disabled selected>Select the Flight Class</option>
                    <option value="Volvo" <?php echo isset($_GET["FlightClass"]) && $_GET["FlightClass"] == "Volvo" ? "selected" : "" ?>>Volvo</option>
                    <option value="Saab" <?php echo isset($_GET["FlightClass"]) && $_GET["FlightClass"] == "Saab" ? "selected" : "" ?>>Saab</option>
                    <option value="Mercedes" <?php echo isset($_GET["FlightClass"]) && $_GET["FlightClass"] == "Mercedes" ? "selected" : "" ?>>Mercedes</option>
                    <option value="Audi" <?php echo isset($_GET["FlightClass"]) && $_GET["FlightClass"] == "Audi" ? "selected" : "" ?>>Audi</option>
                </select>

                <select name="TypeOfVisit" required>
                    <option value="" disabled selected>Select the type of visit</option>
                    <option value="Volvo" <?php echo isset($_GET["TypeOfVisit"]) && $_GET["TypeOfVisit"] == "Volvo" ? "selected" : "" ?>>Volvo</option>
                    <option value="Saab" <?php echo isset($_GET["TypeOfVisit"]) && $_GET["TypeOfVisit"] == "Saab" ? "selected" : "" ?>>Saab</option>
                    <option value="Mercedes" <?php echo isset($_GET["TypeOfVisit"]) && $_GET["TypeOfVisit"] == "Mercedes" ? "selected" : "" ?>>Mercedes</option>
                    <option value="Audi" <?php echo isset($_GET["TypeOfVisit"]) && $_GET["TypeOfVisit"] == "Audi" ? "selected" : "" ?>>Audi</option>
                </select>

                <input type="text" name="budget" placeholder="Enter your budget">

            </form>

        </div>


        <h2>Combinations</h2>

        <table id="Combinations_Page2">

            <tr>
                <th>Departure date</th>
                <th>Departure city</th>
                <th>Arrival date</th>
                <th>Destination city</th>
                <th>Number of people</th>
                <th>Flight class</th>
                <th>Type of Visit</th>
            </tr>

            <tr>
                <td>today</td>
                <td>A</td>
                <td>tomorrow</td>
                <td>B</td>
                <td>3</td>
                <td>business</td>
                <td>relaxing type</td>
            </tr>

        </table>

    </div>

</body>