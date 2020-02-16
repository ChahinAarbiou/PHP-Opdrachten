<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat ";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
$text15 = "toch";
?>
<?php
/*
*  User:       Chahin Aarbiou
*  Date:       12-2-2020
*  Time:       08:56
*  File:       opdracht2.2.php
 * */
?>
<!DOCTYPE html>

<html lang="en">
<!-- start van de head -->
<head>
    <!-- declaratie van de tekenset -->
    <meta charset="utf-8">
    <!-- omschrijving van de website -->
    <meta name="description" content="opdracht A">
    <!-- keywords van de website -->
    <meta name="keywords" content="keyword 1, keyword 2">
    <!-- koppeling naar CSS bestand -->
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>
        Opdracht 2.2
    </title>
</head>
<body>
<header>
    <h1><?php echo "Opdracht 2.2"; ?></h1>
</header>
<aside id="menu">
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../Opdracht%202.1/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../../index.php">Terug naar menu</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../../Hoofdstuk%203/Opdracht%203.1/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%203/Opdracht%203.2/opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%203/Opdracht%203.3/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="../../Hoofdstuk%204/Opdracht%204.1/opdracht4.1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%204/Opdracht%204.2/opdracht4.2.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%204/Opdracht%204.3/opdracht4.3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%204/Opdracht%204.4/opdracht4.4.php">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="../../Hoofdstuk%205/Opdracht%205.1/opdracht5.1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%205/Opdracht%205.2/opdracht5.2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%205/Opdracht%205.3/opdracht5.3.php">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%205/Opdracht%205.4/opdracht5.4.php">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <br>
    <aside id="big">
        <h2>
            Taak 1
        </h2>
        <aside class="grey">
            <p>
                <?php
                echo    $text1 . $text11 . " " . $text4 . " " . $text5 . " " . $text3 . $text10 . $text12
                    . $text7 . $text10 . " " . $text8 . " " . $text15 . $text9 . $text12 . $text6 . " " . $text5 . " " .
                    $text3 . " " . $text13 . $text10;
                ?>
            </p>
        </aside>
        <br>
        <h2>
            Taak 2
        </h2>
        <aside class="grey">
            <p>
                <?php
                echo    $text1 . $text11 . $text12 . $text8 . " " . $text15 . " dat " . $text5 . " "
                    . $text3 . $text10 . $text12 . $text7 . $text10 . " " . $text14 . $text9
                ?>
            </p>
        </aside>
    </aside>
</main>
</body>
</html>
