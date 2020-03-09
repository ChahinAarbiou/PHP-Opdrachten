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
    <br>
    <!-- Een paragraaf   -->
    <p>Taak 2</p>
    <?php
        $countryName = "Zweden"; // Een string variabel
        $currentAge = 20; // Een integer variabel

        // In de pagina een tekst invoegen met je waarde van de bovenstaande variabelen.
        echo "Je woont in " . $countryName . " en je bent " . $currentAge . " jaar oud. <br>";

        /* Als België de land is en je bent 18 of ouder runt die onderstaande if uit.
           Als Bulgarije of Nederland de land is en je bent 18 of ouder runt die onderstaande if uit.
           Als Cyprus de land is en je bent 17 of ouder runt die onderstaande if uit.
           Als Zweden de land is en je bent 20 of ouder runt die onderstaande if uit.  */
        if (($countryName == "België" and $currentAge >= 18) or (($countryName == "Bulgarije" or $countryName == "Nederland") and $currentAge >= 18 ) or ($countryName == "Cyprus" and $currentAge >= 17) or ($countryName == "Zweden" and $currentAge >= 20))
        {
            echo "Je mag hier alle alcohol drinken."; // Vult de pagina de tekst die tussen de dubbele aanhalingstekens staan.
        }
        /* Als België de land is en je bent 16 of ouder runt die onderstaande if uit.
           Als Zweden de land is en je bent 18 of ouder runt die onderstaande if uit. */
        else if (($countryName == "België" and $currentAge >= 16) or ($countryName == "Zweden" and $currentAge >= 18))
        {
            echo "Je mag hier alleen zwakke alcohol drinken."; // Vult de pagina de tekst die tussen de dubbele aanhalingstekens staan.
        }
        /* Als de bovenste if of else if false zijn wordt de onderstaande else uitgevoerd. */
        else
        {
            echo "Je mag hier geen alcohol drinken."; // Vult de pagina de tekst die tussen de dubbele aanhalingstekens staan.
        }
    ?>
</main>
</body>
</html>