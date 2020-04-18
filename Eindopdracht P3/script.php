<?php
//  Een associatieve Array met een key (username) en value (wachtwoord).
$login = array(
    "Chahin" => "Aarbiou",
    "School" => "KW1C",
    "Manager" => "4525",
    "Remco" => "Evers",
    "Leerling" => "leerlingKW1C",
    "Guest" => "Guest",
    "Developer" => "Admin2046",
    "352627" => "Vogelbekdier1973",
    "Fruitsapje" => "Banaan2003",
    "Beer1883" => "KlarenStraat20",
    "Kaasstengel20" => "Boomzakje4257",
);

// De message variabel een onzichtbare spatie geven zodat de tabel wel die cel kent
$message = "&nbsp"; // Als deze leeg zou zijn dan zou de tabel beetje verplaatsen na een foutmelding
// Bij het laden van de pagina dit als true geven zodat het de inlogscherm als eerst laat zien.
$showLoginScreen = true;

// Als er op de submit wordt geklikt voert die de if-statement uit.
if (isset($_POST['submit']))
{
    // In array login de key (username) en value (password) bij heel de array uitvoeren
    foreach ($login as $username => $password)
    {
        // Als de bezoeker een gebruiksnaam/wachtwoord invult hetzelfde als de correcte gebruiksnaam/wachtwoord voert die de if-statement.
        if ($_POST['username'] == $username && $_POST['password'] == $password)
        {
            // Zet showLoginScreen op false dan laat die de openingstijden en adres zien.
            $showLoginScreen = false;
        }
        // Als de bezoeker niets invult bij username en password dan voert die de onderstaande elseif-statement.
        elseif (empty($_POST['username']) && empty($_POST['password']))
        {
            // Zet showLoginScreen op false dan laat die de openingstijden en adres zien.
            $showLoginScreen = false;
        }
        // ALs geen van boven de if en elseif-statment niet true zijn voert die de onderstaande else-statement zien.
        else
        {
            // Zet in tabel een foutmelding  als "Foutieve gebruiksnaam en / of wachtwoord".
            $message = 'Foutieve gebruiksnaam en / of wachtwoord';
        }
    }
}