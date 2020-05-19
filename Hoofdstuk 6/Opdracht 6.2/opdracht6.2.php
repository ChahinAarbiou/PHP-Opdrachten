<?php
/*
*  User:       Chahin Aarbiou
*  Date:       9-3-2020
*  Time:       16:17
*  File:       opdracht6.2.php
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
    <!-- Een formulier met een GET en gegevens naar zichzelf sturen.  -->
    <form id="gameFrm" method="GET" action="opdracht6.2.php">
        <!-- Een radiobutton met daarin een afbeelding ook als het aangeklikt wordt dat de server wordt doorgestuurd.-->
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="steen"><p class="paragraph">Steen</p><img src="steen.jpg"></div>
        <!-- Een radiobutton met daarin een afbeelding ook als het aangeklikt wordt dat de server wordt doorgestuurd.-->
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="papier"><p class="paragraph">Papier</p><img src="papier.jpg"></div>
        <!-- Een radiobutton met daarin een afbeelding ook als het aangeklikt wordt dat de server wordt doorgestuurd.-->
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="schaar"><p class="paragraph">Schaar</p><img src="schaar.jpg"></div>
    </form>
    <?php
    /* Hij werkt niet en ik wil heel graag weten waarom.

    Error melding = PHP Warning:  session_start(): Cannot start session when headers already sent in C:\inetpub\wwwroot\PHP-Opdrachten\Hoofdstuk 6\Opdracht 6.2\opdracht6.2.php on line 31
      session_start();

    $_SESSION['scorePlayer'] = $scorePlayer;
    $_SESSION['scoreComputer'] = $scoreComputer;    */


    $scorePlayer = 0; // Variabel maken waarmee scores worden bijhehouden van de speler.
    $scoreComputer = 0; // Variabel maken waarmee scores worden bijhehouden van de computer.


    //keuze controleren
    if(isset($_GET['keuze'])) {
        $keuzespeler = $_GET['keuze'];
        //Wat kiest de computer
        //Random wordt er een getal tussen 0 en 2 gekozen
        $opties = array("steen","papier","schaar");
        $computerkeuzegetal = rand(0,2);
        $computerkeuze = $opties[$computerkeuzegetal];

        // Hierin komen de resultaten wat gebruiker en computer heeft ingevuld met een afbeelding.
        if (isset($_GET['keuze'])){
            echo '<div id="right">Jij koos: <img src=' . $_GET['keuze'] .  '.jpg><br>';
            echo "&nbsp;&nbsp;De computer koos: <img src='" . $computerkeuze .  ".jpg'><br><br></div>";
        }

        /*
        *  gelijke keuzes wint niemand
        *  schaar wint van papier
        *  schaarverliest van steen
        *  steen wint van schaar
        *  steen verliest van papier
        *  papier wint van steen steen
        *  papier verliest schaar
        */

        // Als computer steen kiest voert die de onderstaande if-statement uit.
        if($computerkeuze == 'steen'){
            // Als computer steen kiest en gebruiker ook steen dat voert die de onderstaande if-statement uit.
            if($keuzespeler == 'steen'){
                echo "<div id='right2'></div>Niemand scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
            // Als gebruiker papier kiest.
            elseif ($keuzespeler == 'papier'){
                $scorePlayer++;
                echo "<div id='right2'>jij scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
            // Als gebruiker schaar kiest.
            elseif ($keuzespeler == 'schaar'){
                $scoreComputer++;
                echo "<div id='right2'>De computer scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
        }
        // Als computer papier kiest voert die de onderstaande if-statement uit.
        elseif ($computerkeuze == 'papier'){
            // Als computer papier kiest en gebruiker ook papier dat voert die de onderstaande if-statement uit.
            if($keuzespeler == 'papier'){
                echo "<div id='right2'>Niemand scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
            // Als gebruiker schaar kiest.
            elseif ($keuzespeler == 'schaar'){
                $scorePlayer ++;
                echo "<div id='right2'>jij scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
            // Als gebruiker steen kiest.
            elseif ($keuzespeler == 'steen'){
                $scoreComputer ++;
                echo "<div id='right2'>De computer scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
        }
        // Als computer schaar kiest voert die de onderstaande if-statement uit.
        elseif ($computerkeuze == 'schaar'){
            // Als computer schaar kiest en gebruiker ook schaar dat voert die de onderstaande if-statement uit.
            if($keuzespeler == 'schaar'){
                echo "<div id='right2'>Niemand scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
            // Als gebruiker steen kiest.
            elseif ($keuzespeler == 'steen'){
                $scorePlayer ++;
                echo "<div id='right2'>jij scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
            // Als gebruiker papier kiest.
            elseif ($keuzespeler == 'papier'){
                $scoreComputer ++;
                echo "<div id='right2'>De computer scoort<br> De score is " . $scorePlayer . " tegen " . $scoreComputer . "</div>";
            }
        }
    }
    ?>
</main>
</body>
</html>
