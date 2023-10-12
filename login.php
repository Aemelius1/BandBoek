<?php

include "head.php";
session_start();
include "header.php";
include "database.php";

$gebruikerQuery = $pdo->query("SELECT id, gebruikersnaam, email, wachtwoord FROM gebruiker");
$gebruikers = $gebruikerQuery->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    foreach ($gebruikers as $gebruiker) {
        if ($gebruiker['gebruikersnaam'] == $gebruikersnaam && $gebruiker['wachtwoord'] == $wachtwoord) {
            $_SESSION['ingelogd'] = $gebruiker['email'];
            header("Location: advertentie-toevoegen.php");
        }
    }
}
?>

<body>
    <div class="container">
        <h2>Log in</h2>
        <form method="post">
            <div class="form-group">
                <label for="gebruikersnaam">Gebruikersnaam</label>
                <input type="text" name="gebruikersnaam" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" name="wachtwoord" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>