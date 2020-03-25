<?php
include "Nav.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="style.css" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

</head>

<body>
    <h1 class="header">Page 1</h1>

    <div class="flex-container">

        <form action="includes/Page_1_Inputs.php" class="flex_Page1" method="POST">

            <div id="DepartureDate" class="input-group date" date-date-format="yyyy-mm-dd">
                <input type="text" name="DepartureDate" placeholder="Select a Departure Date">
                <span class="input-group-addon">
                </span>
            </div>

            <script>
                $(function() {
                    $('#DepartureDate').datepicker({
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
                <option value="">Volvo</option>
                <option value="">Saab</option>
                <option value="">Mercedes</option>
                <option value="">Audi</option>
            </select>

            <div id="ArrivalDate" class="input-group date" date-date-format="yyyy-mm-dd">
                <input type="text" name="ArrivalDate" placeholder="Select an Arrival Date">
                <span class="input-group-addon">
                </span>
            </div>

            <script>
                $(function() {
                    $('#ArrivalDate').datepicker({
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
                <option value="1">Volvo</option>
                <option value="2">Saab</option>
                <option value="3">Mercedes</option>
                <option value="4">Audi</option>
            </select>

            <select name="NumOfPeople" required>
                <option value="" disabled selected>Select the number of people</option>
                <option value="1">Volvo</option>
                <option value="2">Saab</option>
                <option value="3">Mercedes</option>
                <option value="4">Audi</option>
            </select>

            <select name="FlightClass" required>
                <option value="" disabled selected>Select the Flight Class</option>
                <option value="1">Volvo</option>
                <option value="2">Saab</option>
                <option value="3">Mercedes</option>
                <option value="4">Audi</option>
            </select>

            <select name="TypeOfVisit" required>
                <option value="" disabled selected>Select the type of visit</option>
                <option value="1">Volvo</option>
                <option value="2">Saab</option>
                <option value="3">Mercedes</option>
                <option value="4">Audi</option>
            </select>

            <button type="Submit" name="Submit">Next</button>
        </form>

    </div>

</body>

</html>