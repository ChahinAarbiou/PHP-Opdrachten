<?php
/*
*  User:       Chahin Aarbiou
*  Date:       9-3-2020
*  Time:       16:17
*  File:       form_data5.3.php
*/
include "functie.php";
?>

<table>
    <tr>
        <td>
            Vraag
        </td>
        <td>
            Antwoord
        </td>
    </tr>
    <tr>
        <td>
            Naam
        </td>
        <td>
            <?php
            echo $_POST["name"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leeftijd
        </td>
        <td>
            <?php
            echo $_POST["age"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Gemeente
        </td>
        <td>
            <?PHP
            echo $_POST["gemeente"];
            ?>

        </td>
    </tr>
    <tr>
        <td>
            Inwoners
        </td>
        <td>
            <?php
            echo $_POST["citizens"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aantal besmet
        </td>
        <td>
            <?php
            echo $_POST["infected"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Kennissen besmet
        </td>
        <td>
            <?php
            echo $_POST["know"]
            ?>
        </td>
    </tr>
    <tr>
        <td>

        </td>
        <td>

        </td>
    </tr>
    <tr>
        <td>
            Kans per ontmoeting op besmetting
        </td>
        <td>
            <?php
            echo  echoKans();
            ?>
        </td>
    </tr>
    <tr>
        <td>
            kans is 1 op
        </td>
        <td>
            <?php
            echo getKans1Op();
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo vergelijkOorzaken(echoKans());
            ?>
        </td>
    </tr>
</table>
