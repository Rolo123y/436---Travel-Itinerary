<?php
if (isset($_POST['Submit'])) {

            header("location: ../Page3_.php?DepartureDate=" . $_POST['DepartureDate_Page2'] . "&DepartureCity=" . $_POST['DepartureCity_Page2'] .
                "&ReturnDate=" . $_POST['ReturnDate_Page2'] . "&DestinationCity=" . $_POST['DestinationCity'] . "&NumOfPeople=" . $_POST['NumOfPeople'] .
                "&FlightClass=" . $_POST['FlightClass'] . "&TypeOfVisit=" . $_POST['TypeOfVisit'] . "&tripfeatures=" . $_POST['tripfeatures']
                . "&HotelRating=" . $_POST['HotelRating'] . "&flightBudgetSplit=" . $_POST['flightBudgetSplit']
                . "&HotelBudgetSplit=" . $_POST['HotelBudgetSplit']);

    }
    if (isset($_POST['Update'])) {
        header("location: ../Page2_.php?DepartureDate=" . $_POST['DepartureDate_Page2'] . "&DepartureCity=" . $_POST['DepartureCity_Page2'] . "&ReturnDate=" . $_POST['ReturnDate_Page2'] . "&DestinationCity=" . $_POST['DestinationCity'] . "&NumOfPeople=" . $_POST['NumOfPeople']
            . "&FlightClass=" . $_POST['FlightClass'] . "&TypeOfVisit=" . $_POST['TypeOfVisit'] . "&tripfeatures=" . $_POST['tripfeatures']);
    }
