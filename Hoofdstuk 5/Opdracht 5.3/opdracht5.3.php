<?php
/*
*  User:       Chahin Aarbiou
*  Date:       9-3-2020
*  Time:       16:17
*  File:       opdracht5.3.php
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
    <h2>
        Corona enqeute:
    </h2>
    <hr>
    <form method="post" action="form_data5.3.php">
        <table>
            <tr>
                <td>
                    <label for="name"> Wat is je naam:</label>
                </td>
                <td>
                    <input type="text" id="name" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Wat is je leeftijd:
                </td>
                <td>
                    <input type="number" id="age" name="age">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gemeente">Gemeente:</label>
                </td>
                <td>
                    <select id="gemeente" name="gemeente">
                        <option value="Den-Bosch">Den Bosch</option>
                        <option value="Zaltbommel">Zaltbommel</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="citizens"> Aantal inwoners gemeente:</label>
                </td>
                <td>
                    <input type="number" id="citizens" name="citizens">
                </td>
                </td>
            </tr>
            <tr>
                <td>
                    Ken je mensen die besmet zijn in je woonplaats:
                </td>
                <td>
                    <input checked="checked" type="radio" name="know" value="true">Ja
                    <input type="radio" name="know" value="False">Nee
                </td>
            </tr>
            <tr>
                <td>
                    Aantal mensen besmet in je gemeerte*
                </td>
                <td>
                    <input type="number" name="infected" id="infected">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
            <tr>
                <td>
                    *Zie aantallen per gemeente per 100.000 bewoners <a target="_blank" href="https://www.rivm.nl/actuele-informatie-over-coronavirus">Site RIVM</a>
                </td>
            </tr>
        </table>
    </form>
</main>
</body>
</html>