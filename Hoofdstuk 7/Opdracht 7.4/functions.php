<?php

// Een "leeg" $pdo variabele aanmaken
$pdo = null;

// Starten van een DB connectie
function startConnection()
{
    global $pdo;
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
}

// Uitvoeren van een query
function executeQueryViaExec($sql)
{
    global $pdo;
    // Uitvoeren van een SQl query
    try
    {
        // Query uitvoeren
        $pdo->query($sql);
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met uitvoeren van exec():' . $e->getMessage();
        exit();
    }
}

date_default_timezone_set("Europe/Amsterdam"); // De standaard timezone op Amsterdam zetten zodat de juiste tijd in de joke komt te staan.
$date = date("yy-m-d G:i:s.v"); // Een formaat YYYY-MM-DD HH:MM:SS.000  In een variabel zetten en die wordt in insert.php in een grap gezet.
?>