<?php
if (isset($_POST['Submit'])) {
    header("location: ../Page2_.php?DepartureDate=" . $_POST['DepartureDate'] . "&DepartureCity=" . $_POST['DepartureCity'] .
        "&ArrivalDate=" . $_POST['ArrivalDate'] . "&DestinationCity=" . $_POST['DestinationCity'] . "&NumOfPeople=" . $_POST['NumOfPeople'] .
        "&FlightClass=" . $_POST['FlightClass'] . "&TypeOfVisit=" . $_POST['TypeOfVisit']."&tripfeatures=" . $_POST['tripfeatures']);
}
