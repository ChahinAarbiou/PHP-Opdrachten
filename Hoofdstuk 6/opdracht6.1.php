<?php
/*
*  User:       Chahin Aarbiou
*  Date:       27-3-2020
*  Time:       18:17
*  File:       opdracht5.1.php
*/
include "../includes/header.php";
include "../includes/menu.php";
?>
<main id="wrapper">
    <!-- Koptekst 2   -->
    <h2>
        Uitwerkingen
    </h2>
    <br>
    <!-- Een formulier met action waar gegevens in gaan door een get method.-->
    <form method="post" action="checklogin.php">
        <h2>Login</h2>
        <table>
            <tr>
                <td>
                    Naam
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    Wachtwoord
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="submit">
                </td>
            </tr>
        </table>
    </form>
</main>
<?php
session_start();
if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username'] . "&nbsp;<a
        href='loguit.php'>Loguit</a>";
} else {
    $bezoeker = "onbekende bezoeker" . "&nbsp;<a
        href='opdracht6.1.php'>Login</a>";
}
?>
<footer>
    <?php echo $bezoeker; ?>
</footer>
</body>
</html>
