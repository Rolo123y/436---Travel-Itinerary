<?php
// exec("cd data-collection");
exec("python data-collection/flightscraper.py BOM DOH 20/05/2020",$outp,$return);
// exec("data-collection/python -m hotelscraper.py  '2020/05/30' '2020/06/01'", $outp, $return);
// exec('python test.py', $outp, $return);
echo $return;
print_r($outp);
?>
<!-- usage: tripadvisor_scraper.py [-h] checkin_date checkout_date sort locality -->