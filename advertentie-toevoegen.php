<?php

include "head.php";
session_start();

if (!isset($_SESSION['ingelogd'])) {
    header('Location: login.php');
    die();
}

include "header2.php";
include "database.php";

if ($_POST) {
    $titel = $_POST['titel'];
    $advertentieText = $_POST['advertentieText'];
    $genre = $_POST['genre'];
    $provincie = $_POST['provincie'];
    $muzikant = $_POST['muzikant'];
    $email = $_SESSION["ingelogd"];
    $isBand = $_POST['isBand'];
    $creationDate = date('Y-m-d H:i:s');

    $sql = "INSERT INTO advertentie 
        (titel, advertentieText, genre, provincie, muzikant, email, isBand, creationDate)
        VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titel, $advertentieText, $genre, $provincie, $muzikant, $email, $isBand, $creationDate]);
}
?>

<body>
    <div class="container">
        <h2>Advertentie Toevoegen</h2>
        <form method="post">
            <div class="radio">
                <label><input type="radio" name="isBand" value="1" checked>Band zoekt muzikant</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="isBand" value="0">Muzikant zoekt band</label>
            </div>
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="titel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="advertentieText">Advertentie</label>
                <textarea name="advertentieText" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select name="genre" class="form-control">
                    <option value="Blues">Blues</option>
                    <option value="Country">Country</option>
                    <option value="Folk">Folk</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                    <option value="Pop">Pop</option>
                    <option value="Punk">Punk</option>
                    <option value="R&B">R&B</option>
                    <option value="Rock">Rock</option>
                    <option value="Ska">Ska</option>
                </select>
            </div>
            <div class="form-group">
                <label for="provincie">Provincie</label>
                <select name="provincie" class="form-control">
                    <option value="Drenthe">Drenthe</option>
                    <option value="Flevoland">Flevoland</option>
                    <option value="Friesland">Friesland</option>
                    <option value="Gelderland">Gelderland</option>
                    <option value="Groningen">Groningen</option>
                    <option value="Limburg">Limburg</option>
                    <option value="Noord-Brabant">Noord-Brabant</option>
                    <option value="Noord-Holland">Noord-Holland</option>
                    <option value="Overijssel">Overijssel</option>
                    <option value="Utrecht">Utrecht</option>
                    <option value="Zeeland">Zeeland</option>
                    <option value="Zuid-Holland">Zuid-Holland</option>
                </select>
            </div>
            <div class="form-group">
                <label for="muzikant">Muzikant</label>
                <select name="muzikant" class="form-control">
                    <option value="Bassist">Bassist</option>
                    <option value="Blazer">Blazer</option>
                    <option value="Drummer">Drummer</option>
                    <option value="Gitarist">Gitarist</option>
                    <option value="Strijker">Strijker</option>
                    <option value="Toetsenist">Toetsenist</option>
                    <option value="Vocalist">Vocalist</option>
                    <option value="Overig">Overig</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
</body>

</html>
