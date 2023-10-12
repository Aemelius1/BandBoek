<?php

include "head.php";
include "header.php";
include "database.php";

if ($_POST) {
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $wachtwoord2 = $_POST["wachtwoord2"];

    if ($wachtwoord == $wachtwoord2) {
        $sql = "INSERT INTO gebruiker (gebruikersnaam, email, wachtwoord) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$gebruikersnaam, $email, $wachtwoord]);
        header("Location: login.php");
    }
    else {
        echo "<p class=\"container\" style=\"color:red;\">Wachtwoorden zijn niet gelijk</p>";
    }
}

?>

<body>
    <div class="container">
        <h2>Registreren</h2>
        <form method="post">
            <div class="form-group">
                <label for="gebruikersnaam">Gebruikersnaam:</label>
                <input type="text" name="gebruikersnaam" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="wachtwoord">Wachtwoord:</label>
                <input type="password" name="wachtwoord" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="wachtwoord2">Wachtwoord:</label>
                <input type="password" name="wachtwoord2" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registreren</button>
        </form>
    </div>
</body>

</html>