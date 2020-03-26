<?php
if (isset($_POST['Submit'])) {
    header("location: ../Page3_.php?DepartureDate=" . $_POST['DepartureDate'] . "&DepartureCity=" . $_POST['DepartureCity'] .
        "&ArrivalDate=" . $_POST['ArrivalDate'] . "&DestinationCity=" . $_POST['DestinationCity'] . "&NumOfPeople=" . $_POST['NumOfPeople'] .
        "&FlightClass=" . $_POST['FlightClass'] . "&TypeOfVisit=" . $_POST['TypeOfVisit']);
}
