<?php
/*
*  User:       Chahin Aarbiou
*  Date:       9-3-2020
*  Time:       16:17
*  File:       opdracht4.3.php
*/
include "../../includes/header.php";
include "../../includes/menu.php";
include "script.php";
?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen - Opdracht 4.3
    </h2>
    <?php
    //Laad alle taken zien, het wordt met spaties getoond zodat het overzichtelijk is
    echo "<h3>taak 2</h3><br>";
    echo  $task2 . rtrim($text, ", ") . "<br>";
    echo "<h3>taak 3</h3><br>";
    echo  $task3 . rtrim($text, ", ") . "<br>";
    echo "<h3>taak 4</h3><br>";
    echo $task4 . "<br>";
    echo "<h3>taak 5</h3><br>";
    echo $task5 . "<br>";
    echo "<h3>taak 6</h3><br>";
    echo $task6;
    ?>
</main>
<?php
include "../../includes/footer.php";
?>
</body>
</html>
