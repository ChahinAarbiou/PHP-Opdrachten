<?php
/*
*  User:       Chahin Aarbiou
*  Date:       27-3-2020
*  Time:       18:17
*  File:       opdracht5.1.php
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
    <!-- Een formulier met action waar gegevens in gaan door een get method.-->
    <form action="form_data.php" method="get">
        <!-- Koptekst 2   -->
        <h2>
            Restaria Kees kroket
        </h2>
        <!-- Label   -->
        <label>
            Bedrijfsnaam
        </label>
        <br>
        <input name="compName" type="text">
        <br>
        <!-- Label   -->
        <label>
            Voornaam
        </label>
        <br>
        <!-- Invoerveld voor de voornaam.   -->
        <input name="firstName" type="text">
        <br>
        <!-- Label   -->
        <label>
            Achternaam
        </label>
        <br>
        <!-- Invoerveld voor de achternaam.   -->
        <input name="lastName" type="text">
        <br>
        <!-- Label   -->
        <label>
            telefoon
        </label>
        <br>
        <!-- Invoerveld voor de telefoonnummer.   -->
        <input name="phoneNumber" type="number">
        <br>
        <!-- Label   -->
        <label>
            E-mail
        </label>
        <br>
        <!-- Invoerveld voor de email.   -->
        <input name="mail" type="email">
        <br>
        <!-- Label   -->
        <label>
            Bericht
        </label>
        <br>
        <!-- Invoerveld voor de bericht.   -->
        <input name="message" type="text">
        <br>
        <!-- Een button als je er op klikt dat de gegevens naar de action bestand gaat.   -->
        <input type="submit" value="Versturen">
    </form>
</main>
</body>
</html>