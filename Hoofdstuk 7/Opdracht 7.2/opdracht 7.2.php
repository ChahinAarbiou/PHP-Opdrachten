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
?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen
    </h2>
    <br>
    <?php
    // Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
    echo "database connectie gelukt <br><br>";

    // Uitvoeren van een SQl query
    try
    {
        // Query schrijven
        $sql = 'SELECT * FROM joke';
        // Query uitvoeren
        $result = $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
        exit();
    }
    // Lege Array aanmaken voor de results
    $aJokes = array();
    // Door de results heen loopen via een while
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        // Result wegschrijven in de $aJokes array
        $aJokes[] = $row;
    }
/* // Tonen van de inhoud van aJokes
    echo "<br><br><pre>";
    var_dump($aJokes);
    echo "</pre>";
*/

/*---------------------------------- Taak 3 ----------------------------------*/

// In pagina Taak 3 neerzetten * Optioneel *
echo "<h2> Taak 3 </h2><br>";

// Voor de associative array een value opslaan en daarmee joketext en jokeclou in pagina verschijnen.
foreach ($aJokes as $value)
{
    echo $value['joketext'] . " " . $value['jokeclou'] . "<br>";
}

/*---------------------------------- Taak 4 ----------------------------------*/

// In pagina Taak 4 neerzetten * Optioneel *
echo "<br><h2> Taak 4 </h2><br>";

// Beginnen met een tabel en een threads voor de bovenste rij dit echo ik naar de browser.
echo "<table> <tr> <th> ID </th> <th> Joketext </th> <th> Jokeclou </th> <th> Jokedate </th> </tr>";
// Voor de associative array een value opslaan en daarmee cellen vullen met gegevens van de tabel.
foreach ($aJokes as $value) {
    echo "<tr> <td>" . $value['id']. "</td>";
    echo "<td>" . $value['joketext']. "</td>";
    echo "<td>" . $value['jokeclou']. "</td>";
    echo "<td>" . $value['jokedate']. "</td>";
};
// Eindigt de rij en de tabel.
echo "</tr> </table>";
?>
</form>
</main>
</body>
</html>