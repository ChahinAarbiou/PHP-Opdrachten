<?php
/*
*  User:       Chahin Aarbiou
*  Date:       16-5-2020
*  Time:       12:44
*  File:       opdracht7.4.php
*/
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../includes/footer.php";
require "functions.php";

startConnection(); // Uitvoeren van een functie uit een ander PHP-bestand. Hier maakt die connectie met een database.
?>
<main id="wrapper">
    <!-- Een formulier starten die gegevens naar zichzelf stuurt via een POST methode.-->
    <form action="insert.php" method="POST">
        <!-- Koptekst 2   -->
        <h2>
            Uitwerkingen
        </h2>
        <!-- Een witregel   -->
        <br>
        <!-- Koptekst 3  -->
        <h3>
            Nieuwe grap tovoegen
        </h3>
        <!-- Een tabel   -->
        <table>
            <!-- Regel   -->
            <tr>
                <!-- Een cel met breedte 100 pixels zodat het tabel mooi inelkaar zit.   -->
                <td width="100px">
                    Joketext
                </td>
                <!-- Cel   -->
                <td>
                    <!-- Een textbox voor de joketext met een placeholder, min- en maxlengte.   -->
                    <input name="joketext" type="text" placeholder="Joketext komt hier" minlength="15" maxlength="80">
                </td>
            </tr>
            <!-- Regel   -->
            <tr>
                <!-- Cel   -->
                <td>
                    Jokeclou
                </td>
                <!-- Cel   -->
                <td>
                    <!-- Een textbox voor de jokeclou met een placeholder, min- en maxlengte.   -->
                    <input name="jokeclou" type="text" placeholder="Jokeclou komt hier" minlength="1" maxlength="80">
                </td>
            </tr>
            <!-- Regel   -->
            <tr>
                <!-- Cel   -->
                <td>
                    <!-- Een submit button met value 'Maak grap'.   -->
                    <input type="submit" name="makeJoke" value="Maak grap">
                </td>
                <!-- Cel   -->
                <td>
                    <!-- Een submit button met value 'Verwijder laatste joke'.   -->
                    <input type="submit" name="deleteLastJoke" value="Verwijder laatste joke">
                </td>
                <td>
                    <input type="submit" name="resetJokes" value="Reset jokes">
                </td>
            </tr>
            <!-- Regel   -->
            <tr>
                <!-- Cel met colspan 2 zodat dit samen 2 cellen wordt in een  -->
                <td colspan="2">
                    <!-- Een link naar de opdracht 7.3 bestand (Hierin vertoond de pagina de grappen.   -->
                    <a href="../Opdracht%207.3/opdracht7.3.php">Bekijk grappen (opdracht7.3)</a>
                </td>
            </tr>
        </table>
        <?php
        // Als er op de submit button geklikt wordt voert die de onderstaande if-statement uit.
        if (isset($_POST["makeJoke"]))
        {
            // Als een van de invoervelden leeg is dan geeft die een error uit.
            if (empty($_POST["joketext"]) || empty($_POST["jokeclou"]))
            {
                echo "<br><h4>Zorg dat beide inputvelden worden ingevuld!</h4>"; // Een koptekst 4 in pagina zetten.
                exit(); // Het eindige van de PHP-script zodat onderstaande code niet wordt uitgevoerd.
            }
            // Als beide invoervelden zijn ingevuld voert die de onderstaande if-statement uit.
            if(isset($_POST["joketext"]) && isset($_POST["jokeclou"]))
            {
                // Een quary waarin ingevulde waarde van invoervelden en de huidige datum en tijd (function.php) in een nieuwe grap wordt gezet.
                $query = "INSERT INTO joke2 VALUES ('" . $_POST["joketext"] . "','" . $_POST["jokeclou"] . "','" .  $date . "')";
                echo "<br><H3>Grap toegevoegd!</H3><br>"; // Een koptekst 3 in pagina zetten.
                echo "Joketext: " . $_POST["joketext"] . "<br> Jokeclou: " . $_POST["jokeclou"]; // In pagina de ingevulde invoervelden aan gebruiker laten zien.
                executeQueryViaExec($query); // Het uitvoeren van de quary, dit doet die in de functie die in function.php is aangemaakt.
                echo "<br><br><hr><br>" . $query; // Het tonen van de quary aan de gebruiker.
            }
        }

        // EXTRA!! -- Dit vond ik leuk om erbij te zetten. [ Hier verwijder ik de laatste rij ]
        // Bij het klikken van de button met name 'deleteLastJoke' voert die de onderstaande if-statement uit.
        if (isset($_POST["deleteLastJoke"]))
        {
            // Een quary die ervoor zorgt dat de laatste rij wordt verwijderd.
            $query = "DELETE FROM joke2 WHERE id = (SELECT MAX(id)FROM joke2)";
            executeQueryViaExec($query); // Het uitvoeren van de functie met daarin als paramter de quary.
        }

        // EXTRA!! -- Dit vond ik leuk om erbij te zetten. [ Hier wordt alles data verwijderd en vervolgens 14 standaard grappen ingevoerd ]
        // Bij het klikken van de button met name 'resetJokes' voert die de onderstaande if-statement uit.
        if (isset($_POST["resetJokes"]))
        {
            // Het verwijderen van gegevens met truncate en daarna alle 14 jokes invoegen met een INSERT INTO.
            $query = "TRUNCATE TABLE joke2; INSERT into dbo.joke2 VALUES
            ('Wat is een lasbril?','Verleden tijd van leesbril.','2014-07-14 00:00:00'),
            ('Hoe laat is het als de klok dertien keer slaat?','Tijd om naar de klokkenmaker te gaan!','2014-07-15 00:00:00'),
            ('Wat zegt de dokter tegen een vis?','Ah! Ik zie het al, uit de kom!','2014-08-16 00:00:00'),
            ('Hoe heet de broer van Bruno Mars?','Bruno Twix!','2014-08-22 00:00:00'),
            ('Wat is groen en plakt aan de muur?','Kermit de sticker!','2014-09-18 00:00:00'),
            ('Wat is het toppunt van domheid?','Struikelen over draadloos internet.','2015-01-13 00:00:00'),
            ('Waarmee schiet het kanon van een scheepswrak? ','Met kogelvissen!','2015-03-16 00:00:00'),
            ('Er zitten drie na-apers op een muur. Er springt er een af. Hoeveel zijn er dan over?','Geen, want het zijn na-apers!','2015-07-29 00:00:00'),
            ('Wat is de verleden tijd van komkommer?','Kwamkwammer!','2015-11-15 00:00:00'),
            ('Wat begint met een T en eindigt met een T en zit er vol mee?','Een theepot!','2016-03-03 00:00:00'),
            ('Waarom heeft een oen nachtlenzen? ','Dan kan hij zijn dromen beter zien!','2016-07-23 00:00:00'),
            ('Wat is het toppunt van geduld?','Op je handen gaan staan en wachten tot je sokken afzakken.','2017-04-01 00:00:00'),
            ('Wat staat er midden in het bos?','De o.','2017-09-20 00:00:00'),
            ('Wat krijg je als een olifant en een mol een kindje krijgen? ','Heel grote gaten in je tuin!','2017-11-24 00:00:00');";
            executeQueryViaExec($query); // Het uitvoeren van de functie met daarin als paramter de quary.
        }
        ?>
    </form>
</main>
</body>
</html>