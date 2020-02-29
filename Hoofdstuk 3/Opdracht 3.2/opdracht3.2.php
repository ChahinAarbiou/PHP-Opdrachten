<?php
/*
*  User:       Chahin Aarbiou
*  Date:       28-2-2020
*  Time:       16:17
*  File:       opdracht3.2.php
*/
?>
<?php
include "../../includes/header.php";
include "../../includes/menu.php";
?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen
    </h2>
    <!-- Een paragraaf   -->
    <p>Taak 1</p>
    <?php
        $trafficLightColor = "groen"; // Een string variabel met de waarde als kleur van de stoplicht.
        $ambulanceComing = false; // Een boolean variable met waarde false
        $driveOn = true; // Een boolean variable met waarde true

        // Als de stoplicht op groen staat en er komt geen ambulance aan voert die de onderstaande if uit.
        if ($trafficLightColor == "groen" and $ambulanceComing == false) {
            echo "<p id='green'>" . "U mag doorrijden" . "</p>";
        }

        // Als de stoplicht op groen staat en er komt een ambulance aan voert die de onderstaande else if uit.
        // Ook als de stoplicht op oranje of rood staat voert die de onderstaande else if uit.
        else if (($trafficLightColor == "groen" and $ambulanceComing == true) or $trafficLightColor == "oranje" or $trafficLightColor == "rood" ) {
            echo "<p id='red'>" . "U moet stoppen!" . "</p>";
        }
    ?>
</main>
</body>
</html>