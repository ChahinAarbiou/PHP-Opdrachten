<?php
/*
*  User:       Chahin Aarbiou
*  Date:       30-3-2020
*  Time:       15:40
*  File:       lesopdracht_form_data53.php
*/

//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.

require "lesopdracht_functions53.php";
?>

<table>
    <tr>
        <td>Voornaam</td>
        <td>
            <?php
                echo $_POST["firstname"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            if (!empty($_POST["tussenvoegsel"])) {
                echo "Tussenvoegsel";
            }
            ?>
        </td>
        <td>
            <?php
                if (isset($_POST["tussenvoegsel"])) {
                    echo $_POST["tussenvoegsel"];
                }
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>
            <?php
                echo $_POST["lastname"];
            ?>
        </td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>
            <?php
                echo getTeacherName();
            ?>
        </td>
    </tr>
</table>
