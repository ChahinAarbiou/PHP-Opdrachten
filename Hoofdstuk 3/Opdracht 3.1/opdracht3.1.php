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
?>
<main id="wrapper">
    <h2>
        Uitwerkingen
    </h2>
    <?php
        echo "<p> $verhaal </p>";
    ?>








</main>
</body>
</html>