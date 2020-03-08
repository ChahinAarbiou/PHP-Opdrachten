<?php
/*
  * Instructie date() eb elseif
  */
date_default_timezone_set("Europe/Amsterdam");

/*echo date("d-m-y H:i");*/
$month = date("n");

if ($month == "03") {
    echo "Het is vandaag lente";
} elseif ($month >= 6 && $month < 9 ) {
    echo "Het is zomer";
}








?>
