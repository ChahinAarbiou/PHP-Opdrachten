<?php
/*
*  User:       Chahin Aarbiou
*  Date:       18-4-2020
*  Time:       18:17
*  File:       login.php
*/

require "script.php"; // Script.php aan dit bestand toevoegen.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Eindopdracht P3
        </title>
        <!-- declaratie van de tekenset -->
        <meta charset="utf-8">
        <!-- omschrijving van de website -->
        <meta name="description" content="">
        <!-- keywords van de website -->
        <meta name="keywords" content="">
        <!-- Een stylesheet koppelen aan dit bestand -->
        <link type="text/css" rel="stylesheet" href="StyleSheet.css">
    </head>
    <body>
        <!-- Een koptekst 1-->
        <h1>
            Bergheen
        </h1>
        <!-- Een formulier met een action naar zichzelf. En een post method die de gegevens naar zicht zelf stuurt -->
        <form action="login.php" method="post">
            <?php
            /* Als de login scherm true is dan geeft de onderstaande HTML codes in */
            if ($showLoginScreen == true)
            {
            ?>
            <!-- Een div zodat ik in css het een goede opmaak kan geven. -->
            <div id="login">
                <!--Een paragraaf-->
                <p>
                    Login om onze adresgegevens + openingstijden te zien
                </p>
                <!-- Een tabel -->
                <table>
                    <!-- Een rij-->
                    <tr>
                        <!--Een cel met een breedte zodat elke cel een breedte van 100 pixels krijgt-->
                        <td width="100px"></td>
                        <!--Een cel met een ID zodat in CSS ik dit een rode tekst kleur kan geven-->
                        <td id="red">
                            <!-- Hier komt de foutmelding als er een verkeerde gebruiksnaam/wachtwoord wordt ingevuld [script.php]-->
                            <?php
                                echo $message;
                            ?>
                        </td>
                    </tr>
                    <!-- Een rij-->
                    <tr>
                        <!-- Een cel met een label voor de gebruiksnaam -->
                        <td>
                            <label for="username">
                                Username
                            </label>
                        </td>
                        <!-- Een input tekst voor gebruiksnaam met een 20 maximale karakters-->
                        <td>
                            <input type="text" id="username" name="username" maxlength="20">
                        </td>
                    </tr>
                    <!-- Een rij-->
                    <tr>
                        <!-- Een cel met een label voor de wachtwoord -->
                        <td>
                            <label for="password">
                                Password
                            </label>
                        </td>
                        <!-- Een input tekst voor wachtwoord met een 20 maximale karakters-->
                        <td>
                            <input type="password" id="password" name="password" maxlength="20">
                        </td>
                    </tr>
                    <!-- Een rij-->
                    <tr>
                        <!--Een cel met geen waarde zodat de submit op de tweede cel komt te staan-->
                        <td></td>
                        <!--Een submit button met een ID zodat ik in CSS een goede opmaak kan geven -->
                        <td id="submit">
                            <input type="submit" name="submit" value="Login">
                        </td>
                    </tr>
                </table>
            </div>
            <?php
            }
            /* Als de $showLoginScreen false is dan toon die de onderstaande HTML code in */
            else
            {
            ?>
                <!-- Een div zodat ik in css het een goede opmaak kan geven. -->
            <div id="loginTrue">
                <!--Een koptekst 3-->
                <h3>
                    Welkom!
                </h3>
                <!-- Een fieldset-->
                <fieldset>
                    <!-- Tekst in de fieldset -->
                    <legend>
                        Openingstijden
                    </legend>
                    <!-- Paragraaf-->
                    <p>
                        Do: 22:00 <br>
                        Vr: All day <br>
                        Za: All day <br>
                        Zo: 12:00
                    </p>
                </fieldset>
                <!-- Een fieldset-->
                <fieldset>
                    <!-- Tekst in de fieldset -->
                    <legend>Adresgegevens</legend>
                    <!-- Paragraaf-->
                    <p>
                        Am Wriezener Bahnhof<br>
                        10243 Berlin<br>
                        Duitsland
                    </p>
                </fieldset>
                <!-- Paragraaf-->
                <p>
                    Deze gegevens dien je ten alle tijden geheim te houden!
                </p>
            </div>
            <?php
            }
            /* De footer importeren */
            include "../includes/footer.php";
            ?>
        </form>
    </body>
</html>