<?php
/*
*  User:       Chahin Aarbiou
*  Date:       9-3-2020
*  Time:       16:17
*  File:       opdracht5.2.php
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
    <br>
    <!--Hier begint de formulier met een method get-->
    <form action="uitschrijving.php" method="get">
        <!--Koptekst 2-->
        <h2>
            Uitschrijfformulier KW1C
        </h2>
        <!--Horizontale lijn -->
        <hr>
        <!-- Tabel -->
        <table>
            <tr>
                <!--Cel met breedte 200 pixel zodat alles mooi uit elkaar staat.-->
                <td width="250px">
                    Voor en achternaam
                </td>
                <!-- Hier moet de gebruiker zijn voornaam en achternaam invullen. -->
                <td>
                    <input name="name" type="text" size="26">
                </td>
            </tr>
            <tr>
                <!-- Een cel -->
                <td>
                    Studentnummer
                </td>
                <!--Hier moet de gebruiker zijn studentnummer invullen. Dit bestaat alleen uit cijfers.-->
                <td>
                    <input name="studentid" type="number">
                </td>
            </tr>
            <tr>
                <!-- Een cel -->
                <td>
                    Datum van uitschrijving
                </td>
                <!--Hier moet de gebruiker een datum invullen.-->
                <td>
                    <input name="date" type="date">
                </td>
            </tr>
            <tr>
                <!-- Een cel -->
                <td>
                    Reden van uitschrijving
                </td>
                <!--Hier moet de gebruiker kiezen uit 4 verschillende reden uit een dropdownlist. -->
                <td>
                    <select name="reason">
                        <option value="Verkeerde keuze">
                            Verkeerde keuze
                        </option>
                        <option value="opgegeven">
                            Opgegeven door slechte cijfers
                        </option>
                        <option value="veel afwezigheid">
                            Veel afwezigheid
                        </option>
                        <option value="weggestuurd">
                            Weggestuurd van school
                        </option>
                    </select>
                </td>
            </tr>
            <!-- Een cel -->
            <tr>
                <td>
                    Leerjaar
                </td>
                <!-- Hier moet de gebruiker kiezen uit 3 radiobuttons waar leerjaar 1 t/m 3 in staat. -->
                <td>
                    <input name="year" type="radio" value="1e leerjaar">
                        Leerjaar 1
                    </input>
                    <br>
                    <input name="year" type="radio" value="2e leerjaar">
                        Leerjaar 2
                    </input>
                    <br>
                    <input name="year" type="radio" value="3e leerjaar">
                        Leerjaar 3
                    </input>
                </td>
            </tr>
            <tr>
                <!--Een colspan zodat dit 2 cellen samen wordt.-->
                <td colspan="2">
                    <!-- Een checkbox die een gebruiker kan aanklikken voor succesklas.-->
                    <input type="checkbox" name="succesClass" id="succesklas">
                    <!-- Een label -->
                    <label for="succesklas">
                        Ik wil me aanmelden bij de succesklas
                    </label>
                </td>
            </tr>
            <tr>
                <!--Een colspan zodat dit 2 cellen samen wordt.-->
                <td colspan="2">
                    <!-- Een checkbox die een gebruiker kan aanklikken voor verwijder informatie.-->
                    <input type="checkbox" name="deleteInfo" id="information">
                    <!-- Een label -->
                    <label for="information">
                        Verwijder mijn gegevens uit het systeem
                    </label>
                </td>
            </tr>
            <tr>
                <!--Een colspan zodat dit 2 cellen samen wordt.-->
                <td colspan="2">
                    Geef hieronder de reden van je uitschrijving
                </td>
            </tr>
            <tr>
                <!--Een colspan zodat dit 2 cellen samen wordt.-->
                <td colspan="2">
                    <!--Een input tekst waar gebruiker zijn bericht kan invullen. -->
                    <input name="message" id="message" type="text" size="60">
                </td>
            </tr>
            <tr>
                <!-- Hier komt de submit button. Bij klikken gaat de gegevens naar de uitschrijving.php -->
                <td>
                    <input type="submit" value="Versturen">
                </td>
            </tr>
        </table>
    </form>
</main>
</body>
</html>