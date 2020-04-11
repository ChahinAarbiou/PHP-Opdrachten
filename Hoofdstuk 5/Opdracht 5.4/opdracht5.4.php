<?php
/*
*  User:       Chahin Aarbiou
*  Date:       11-4-2020
*  Time:       16:17
*  File:       opdracht5.4.php
*/
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../includes/footer.php";
?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen
    </h2>
    <!-- Een formulier starten die de gegevens naar zichzelf stuurt (action). Dit doet die met een post method. -->
    <form action="opdracht5.4.php" method="post">
        <br>
        <!-- Koptekst 3 -->
        <h3>
            Stoplicht
        </h3>
        <!-- Een table -->
        <table>
            <tr>
                <!-- Een breedte geven zodat alles goed bij elkaar staat.-->
                <td width="250px">
                    Komt er een ambulance aan?
                </td>
                <td>
                    <!-- Een radiobutton met een value "ja".-->
                    <input name="ambulanceComing" type="radio" value="ja">
                        Ja
                    </input>
                    <!-- Een radiobutton met een value "nee".-->
                    <input name="ambulanceComing" type="radio" value="nee">
                        Nee
                    </input>
                </td>
            </tr>
            <tr>
                <!-- Een cel-->
                <td>
                    Stoplicht kleur ?
                </td>
                <td>
                    <!-- Een radiobutton met een value "rood".-->
                    <input name="trafficLightColor" type="radio" value="rood">
                        Rood
                    </input>
                    <!-- Een radiobutton met een value "groen".-->
                    <input name="trafficLightColor" type="radio" value="groen">
                        Groen
                    </input>
                    <!-- Een radiobutton met een value "oranje".-->
                    <input name="trafficLightColor" type="radio" value="oranje">
                        Oranje
                    </input>
                </td>
            </tr>
            <tr>
                <!-- Een cel-->
                <td>
                    <!-- Een submit button, bij het klikken worden de gegevens verstuurd naar zichzelf. -->
                    <input type="submit" name="submit">
                </td>
            </tr>
            <tr>
                <!-- Een colspan zodat de onderstaande cel een breedte krijgt van 2 cellen. -->
                <td colspan="2">
                    <br>
                    <?php
                        // Zodra er op de submit wordt gedrukt wordt de onderstaande if-statement gerunt.
                        if (isset($_POST['submit'])) {
                            // Een koptekst 3 tekst in de pagina zetten met echo.
                            echo "<h3>Wat is de situatie en wat moet ik doen?</h3><br>";
                            /* Als er niet wordt aangeklikt bij stoplichtkleur of ambulance dan runt die de onderstaande if-statement uit.*/
                            if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComing'])) {
                                // Een paragraaf tekst in de pagina zetten met echo.
                                echo "<p>Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.</p>";
                            }
                            //Als de if-statement false is dan runt die de onderstaande else-statement.
                            else
                            {
                                // Declaren van variabelen van de post variabels.
                                $trafficLightColor = $_POST['trafficLightColor'];
                                $ambulanceComing = $_POST['ambulanceComing'];

                                // In pagina: Stoplicht staat op [KLEUR] en er komt: [JA/NEE] een ambulance aan.
                                echo "Stoplicht staat op " . $trafficLightColor . " en er komt: " . $ambulanceComing . " een ambulance aan.";

                                // Als stoplicht kleur op groen staat en er komt geen ambulance aan dan voert die het onderstaande if-statement uit.
                                if ($trafficLightColor == "groen" && $ambulanceComing == "nee") {
                                    // Een paragraaf tekst in de pagina zetten met echo. Ook een id zodat ik die een kleur kan geven met CSS.
                                    echo "<p id='green'>U mag doorrijden</p>";
                                 }
                                // Als stoplicht niet op groen staat en komt wel een ambulance aan dan voert die de onderstaande else-statement uit.
                                else {
                                    // Een paragraaf tekst in de pagina zetten met echo. Ook een id zodat ik die een kleur kan geven met CSS.
                                    echo "<p id='red'>U moet stoppen</p>";
                                }
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</main>
</body>
</html>