<?php
/*
*  User:       Chahin Aarbiou
*  Date:       15-3-2020
*  Time:       16:17
*  File:       script.php
*/
$task2 = "lancering in: ";
$text = "";
$counter = 19;
while ($counter >= 0)
{
    $text = $text . $counter . ",";
    $counter--;
}


$text2 ="";
$task3 ="";
for ($teller = 19; $teller >= 0; $teller--)
{
    $text2 = $text2 . $counter . ",";
    $counter--;
}

// taak 3
$task4 = "";
$counter2 = 1;
while ($counter2 <= 6)
{
    $task4 .= "<h" . $counter2 .  ">Dit is de " . $counter2 . "e iteratie<br></" . $counter2 . ">";
    $counter2++;
}

// taak 5
$text3 ="";
$task5 ="<table><tr>";
for ($teller2 = 1; $teller2 <= 10; $teller2++)
{
    $task5 .= "<td>Dit is de " . $teller2 . "e iteratie</td>";
}
$task5 .= "</tr></table>";

// taak 6
$task6 = "";
$counter3 = 2020;
$extracounter=0;
$extracounter1=2020;
$extracounter2=2002;

while ($counter3 > 1999) {
    $task6 .= "<p>In " . $counter3 . " was ik " . ($extracounter1-$extracounter2);
    $counter3--;
    $extracounter2++;
    $extracounter++;
}

