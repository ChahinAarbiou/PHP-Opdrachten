<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName(){
    if ($_POST["subject"] == "js") {
        $text1 = "Meneer van de Wetering";
        return $text1;
    }
    else
    {
        $text2 = "Remco Evers";
        return $text2;
    }
}
?>