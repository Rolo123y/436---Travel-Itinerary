<?php
header('Content-Type: application/vnd.ms-excel');
header('Contect-disposition: attachment; filename=' . rand() . '.xls');
echo $_GET["data"];
