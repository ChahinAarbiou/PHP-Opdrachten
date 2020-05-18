<?php
/*
*  User:       Chahin Aarbiou
*  Date:       16-5-2020
*  Time:       12:44
*  File:       opdracht7.2.php
*/
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../includes/footer.php";
require "functions.php";

// Starten van een database connectie
startConnection();

// Alles tonen van database joke2 dit quary opslaan in een variabel.
$query = "SELECT * FROM joke2";
?>
<main id="wrapper">
    <form action="opdracht7.3.php" method="GET">
        <!-- Koptekst 2   -->
        <h2>
            Uitwerkingen
        </h2>
        <!-- Witregel   -->
        <br>
        <!-- Paragraaf   -->
        <p>
            SELECT * FROM joke2 WHERE joketext LIKE %blondje%
        </p>
        <!-- Witregel   -->
        <br>
        <!-- Koptekst 3 met daarin een tektbox  -->
        <h3>
           Zoekterm: <input type="text" name="findQuary"><input type="submit" value="submit">
        </h3>
        <!-- Koptekst 3 met daarin een button  -->
        <h3>
            Reset: <input type="submit" name="reset" value="reset">
        </h3>
        <!-- Witregel   -->
        <br>
        <!-- Horizontale lijn van 800 pixels   -->
        <hr width="800px">
        <?php

        // Zodra gebruiker op de button klikt voert die de onderstaande if-statement uit.
        if (isset($_GET["findQuary"]))
        {
            $query = "SELECT * FROM joke2 WHERE joketext LIKE '%" . $_GET["findQuary"] . "%'";
        }

        // Als gebruiker niets invult of gebruiker op refresh button klikt dan moet de quary "SELECT* FROM joke2" zijn.
        if(empty($_GET["findQuary"]) || isset($_GET["reset"]) )
        {
            $query = "SELECT * FROM joke2";
        }

        // Nu we weten wat de quary is door hierboven de statements uit te voeren. Toon de quary in een paragraaf.
        echo "<p> $query </p>";

        // Voert de functie executeQuary met daarin als parameter de quary. Dit slaat die op als variabel jokes. Later op de pagina zetten we dit in een tabel.
        $jokes = executeQuery($query);
        ?>
        <!-- Witregel   -->
        <br>
        <!-- Tabel   -->
        <table>
            <tr>
                <!-- Thread   -->
                <th>
                    Jokeid
                </th>
                <!-- Thread   -->
                <th>
                    Joketext
                </th>
                <!-- Thread   -->
                <th>
                    Jokeclou
                </th>
                <!-- Thread   -->
                <th>
                    Jokedate
                </th>
                <?php
                // Resultaten rij voor rij ophalen
                while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
                {
                    // Voor ieder joke een rij maken met daarin cellen met de bijhorende gegevens
                    echo "<tr>" . "<td>".  $row["id"] . "</td> <td>" . $row["joketext"] . "</td> <td>" . $row["jokeclou"] . "</td> <td>" .  $row["jokedate"] . "</td> </tr>";
                }
                ?>
            </tr>
        </table>
    </form>
</main>
</body>
</html>