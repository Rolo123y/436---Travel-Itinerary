<?php
include "Nav.php";
?>

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Page 1</title>
    <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
</head>

<body>
    <h1 class="header">MSCI436 - Optimal Itinerary finder</h1>

    <div class="flex-container">
        <div>
            <h1 class="header">Please fill in the information below</h1>
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
                    <option value="Chicago">Chicago</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Montreal">Montreal</option>
                    <option value="Vancouver">Vancouver</option>
                </select>

                <div id="ReturnDate" class="input-group date" date-date-format="yyyy-mm-dd">
                    <input type="text" name="ReturnDate" placeholder="Select a Return Date">
                    <span class="input-group-addon">
                    </span>
                </div>

                <script>
                    $(function() {
                        $('#ReturnDate').datepicker({
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
                    <option value="Chicago">Chicago</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Montreal">Montreal</option>
                    <option value="Vancouver">Vancouver</option>
                </select>

                <select name="NumOfPeople" required>
                    <option value="" disabled selected>Select the number of people</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

                <select name="FlightClass" required>
                    <option value="" disabled selected>Select the Flight Class</option>
                    <option value="B">B</option>
                    <option value="E">E</option>
                </select>

                <select id="TypeOfVisit" name="TypeOfVisit" onChange="changecat(this.value);" required>
                    <option value="" disabled selected>Select the type of visit</option>
                    <option value="Business">Business</option>
                    <option value="Pleasure">Pleasure</option>
                </select>

                <select name="tripfeatures" id="tripfeatures">
                    <option value="" disabled selected>Select the type of feature</option>
                </select>

                <script>
                    var tripfeaturesbyType = {
                        Business: [],
                        Pleasure: ["Adventure", "cultural", "ecotourism", "water sports"]
                    }

                    function changecat(value) {
                        if (value.length == 0) document.getElementById("tripfeatures").innerHTML = "<option></option>";
                        else {
                            var catOptions = "";
                            for (tripfeaturesId in tripfeaturesbyType[value]) {
                                catOptions += "<option>" + tripfeaturesbyType[value][tripfeaturesId] + "</option>";
                            }
                            document.getElementById("tripfeatures").innerHTML = catOptions;
                        }
                    }
                </script>

                <!-- <select id="Hotelrating" name="TypeOfVisit" onChange="changecat(this.value);" required>
                    <option value="" disabled selected>Select a hotel rating</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>
                    <option value="3.5">3.5</option>
                    <option value="4">4</option>
                    <option value="4.5">4.5</option>
                    <option value="5">5</option>
                </select> -->

                <button type="Submit" name="Submit">Next</button>
            </form>
        </div>
    </div>

</body>