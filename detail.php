<?php

include "head.php";
session_start();
include "database.php";

if (!isset($_SESSION['ingelogd'])) {
    include "header.php";
} else {
    include "header2.php";
}
?>

<body>
    <div class="container">
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM advertentie WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $advertentie = $row;
        }
        ?>

        <div class="container">
            <h2>Details</h2>
            <h5>Titel</h5>
            <p><?php echo $advertentie['titel']; ?></p>
            <h5>Advertentie</h5>
            <p><?php echo $advertentie['advertentieText']; ?></p>
            <h5>Genre</h5>
            <p><?php echo $advertentie['genre']; ?></p>
            <h5>Provincie</h5>
            <p><?php echo $advertentie['provincie']; ?></p>
            <h5>Muzikant</h5>
            <p><?php echo $advertentie['muzikant']; ?></p>
            <h5>Contact</h5>
            <p><?php echo $advertentie['email']; ?></p>
        </div>

    </div>

</body>

</html>