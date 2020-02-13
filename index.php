<?php
/*
*  User:       Chahin Aarbiou
*  Date:       12-2-2020
*  Time:       08:56
*  File:       index.php
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
        <link type="text/css" rel="stylesheet" href="css/Style.css">
        <title>
            Template
        </title>
    </head>
    <body>
        <header>
            <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
        </header>
        <aside>
            <h2>Menu</h2>
            <ul>
                <li>Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="Hoofdstuk2/opdracht2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk2/opdracht2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <li>Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="Hoofdstuk3/opdracht3.1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk3/opdracht3.2.php">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk3/opdracht3.3.php">Opdracht 3.3</a>
                        </li>
                    </ul>
                </li>
                <li>Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="Hoofdstuk4/opdracht4.1.php">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk4/opdracht4.2.php">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk4/opdracht4.3.php">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk4/opdracht4.4.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                </li>
                <li>Hoofdstuk 5
                    <ul>
                        <li>
                            <a href="Hoofdstuk5/opdracht5.1.php">Opdracht 5.1</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk5/opdracht5.2.php">Opdracht 5.2</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk5/opdracht5.3.php">Opdracht 5.3</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk5/opdracht5.4.php">Opdracht 5.4</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
                echo '<img src="gif.gif"  />';
            ?>
        </main>
    </body>
</html>