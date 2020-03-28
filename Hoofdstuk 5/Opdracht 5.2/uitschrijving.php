<?php
/*
*  User:       Chahin Aarbiou
*  Date:       27-3-2020
*  Time:       18:17
*  File:       uitschrijving.php
*/
?>
<?php
print_r($_GET);
?>
<!-- Koptekst 1-->
<h1>Uitschrijf Formulier</h1>
<!--Horinzontale lijn-->
<hr>
<!--Tabel-->
<table>
    <tr>
        <!--Cel met breedte 200 pixel zodat alles mooi uit elkaar staat.-->
        <td width="200px">Naam</td>
        <!-- Hier komt de ingevulde voornaam en achternaam die in de formulier is ingevuld.-->
        <td>
            <?php echo $_GET["name"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>Student nummer</td>
        <!-- Hier komt de ingevulde studentnummer die in de formulier is ingevuld.-->
        <td>
            <?php echo $_GET["studentid"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>Datum van uitschrijving</td>
        <!-- Hier komt de ingevulde datum die in de formulier is ingevuld.-->
        <td>
            <?php echo $_GET["date"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>Rede van uitschrijving</td>
        <!-- Hier komt de reden uit de dropdownlist die in de formulier is aangeklikt.-->
        <td>
            <?php echo $_GET["reason"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>Leerjaar</td>
        <!-- Hier komt de leerjaar uit de radio buttons die in formulier is aangeklikt.-->
        <td>
            <?php echo $_GET["year"]; ?>
        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>Succesklas</td>
        <!-- Hier komt de een JA als de checkbox is aangeklikt of een NEE als de checkbox niet is aangeklikt uit de formulier.-->
        <td>
            <?php
                if (isset($_GET["succesClass"]))
                {
                    echo "JA";
                }
                else
                {
                    echo "NEE";
                }
            ?>
        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>Verwijder gegevens</td>
        <!-- Hier komt de een JA als de checkbox is aangeklikt of een NEE als de checkbox niet is aangeklikt uit de formulier.-->
        <td>
            <?php
                if (isset($_GET["deleteInfo"]))
                {
                    echo "JA";
                }
                else
                {
                    echo "NEE";
                }
            ?>

        </td>
    </tr>
    <tr>
        <!--Een cel-->
        <td>
            Bericht
        </td>
        <!--Hier komt de bericht die de formulier is ingevuld dit kan ook leeg zijn.-->
        <td>
            <?php echo $_GET["message"]; ?>
        </td>
    </tr>
</table>