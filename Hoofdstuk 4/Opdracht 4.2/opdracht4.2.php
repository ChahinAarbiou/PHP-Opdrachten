<?php
/*
*  User:       Chahin Aarbiou
*  Date:       8-3-2020
*  Time:       16:17
*  File:       opdracht4.2.php
*/
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../includes/script.php";
?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen
    </h2>
    <?php
    echo "<p>" . " Voor het vak " . "<span class='bold'>" . $courseName . "</span>" . " heb je " . "<span class='bold'>" . $teacherName . "</span>" . " als docent." . "</p>"
    ?>
</main>
<?php
include "../../includes/footer.php";
?>
</body>
</html>