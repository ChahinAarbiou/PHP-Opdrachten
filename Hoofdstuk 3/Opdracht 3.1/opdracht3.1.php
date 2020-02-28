<?php
/*
*  User:       Chahin Aarbiou
*  Date:       28-2-2020
*  Time:       16:17
*  File:       opdracht3.1.php
*/
?>
<?php
include "../../includes/header.php";
include "../../includes/menu.php";

$evenement = "Elfstedentocht"; // string
$evenementFries = "Alvestêdetocht"; // string
$kilometer = 200; // integer / number
$sport = "schaatstocht"; // string
$schaatsbaan = "natuurijs"; // string
$organisator = " Koninklijke Vereniging De Friesche Elf Steden"; // string
$hoofdstadEvenment = "Leeuwarden"; // string
$provincieEvenement = "Friesland"; // string
$aantalEvenementVerreden = 15; // integer / number
$eersteEvenementJaar = 1909; // integer / number
$aantalKeerInWinter = 1; // integer / number

$verhaal = "De $evenement (Fries: $evenementFries) is een $kilometer kilometer lange $sport over $schaatsbaan 
die wordt georganiseerd door de $organisator. $hoofdstadEvenment, de hoofdstad van $provincieEvenement,
is start- en aankomstplaats. De $evenement is inmiddels $aantalEvenementVerreden maal verreden en werd voor het
eerst in $eersteEvenementJaar gereden en wordt maximaal $aantalKeerInWinter keer per winter
gehouden."; // De verhaal met de variabelen die bovenaan zijn aangemaakt.

$verhaal2 = "De " . $evenement . " (Fries: " . $evenementFries . " is een " . $kilometer . " kilometer lange " . $sport .
" over " . $schaatsbaan . " die wordt georganiseerd door de " . $organisator . ". " . $hoofdstadEvenment .
", de hoofdstad van " . $provincieEvenement . ", is start- en aankomstplaats. De " . $evenement . " is inmiddels " .
$aantalEvenementVerreden . " maal verreden en werd voor het eerst in " . $eersteEvenementJaar . " gereden en wordt maximaal " .
$aantalKeerInWinter . " keer per winter gehouden."; // De verhaal met de variabelen die bovenaan zijn aangemaakt.

?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen
    </h2>
    <br>
    <!-- Een paragraaf  -->
    <p>
        Taak 1
    </p>
    <br>
    <!-- Met behulp PHP een variabel invoegen in een paragraaf. Die variabel is de verhaal die bovenaan is aangemaakt.  -->
    <?php
        echo "<p> $verhaal </p>";
    ?>
    <br>
    <!-- Een paragraaf  -->
    <p>
        Taak 2
    </p>
    <br>
    <!-- Met behulp PHP een variabel invoegen in een paragraaf. Die variabel is de verhaal die bovenaan is aangemaakt.  -->
    <?php
    echo "<p> $verhaal2 </p>";
    ?>
</main>
</body>
</html>