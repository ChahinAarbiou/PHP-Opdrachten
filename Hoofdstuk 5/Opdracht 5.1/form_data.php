<?php
/*
*  User:       Chahin Aarbiou
*  Date:       27-3-2020
*  Time:       18:17
*  File:       form_data.php
*/
?>
<!--Een tabel-->
<table>
    <tr>
        <!--Een cel -->
        <td>
            Bedrijfsnaam:
        </td>
        <!--Een cel -->
        <td>
            <?php echo $_GET["compName"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel -->
        <td>
            Voornaam:
        </td>
        <!--Een cel -->
        <td>
            <!-- Hier komt de ingevulde voornaam in dit cel terecht.-->
            <?php echo $_GET["firstName"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel -->
        <td>
            Achternaam:
        </td>
        <!--Een cel -->
        <td>
            <!-- Hier komt de ingevulde achternaam in dit cel terecht.-->
            <?php echo $_GET["lastName"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel -->
        <td>
            Telefoonnummer:
        </td>
        <!--Een cel -->
        <td>
            <!-- Hier komt de ingevulde telefoonnummer in dit cel terecht.-->
            <?php echo $_GET["phoneNumber"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel -->
        <td>
            E-mail:
        </td>
        <!--Een cel -->
        <td>
            <!-- Hier komt de ingevulde email adres in dit cel terecht.-->
            <?php echo $_GET["mail"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel -->
        <td>
            Bericht:
        </td>
        <!--Een cel -->
        <td>
            <!-- Hier komt de ingevulde bericht in dit cel terecht.-->
            <?php echo $_GET["message"]; ?>
        </td>
    </tr>
</table>