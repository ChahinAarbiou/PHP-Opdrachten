<?php
// $localhost = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
$localhost = "http://localhost/PHP-Opdrachten";
?>
<footer>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");

    if ($uur >= 0 && $uur < 5)
    {
        echo "Goedennacht";
    }
    elseif ($uur >= 5 && $uur < 12)
    {
        echo "Goedenochtend";
    }
    elseif ($uur >= 12 && $uur < 17)
    {
        echo "Goedenmiddag";
    }
    else
    {
        echo "Goedenavond";
    }
    ?>

    <?php
    include 'variabelen.php';
    echo " bezoeker, " . "&copy " . $name . " " . $year . "         |      " ."<a href='../../index.php'>Home</a>";
    ?>
</footer>