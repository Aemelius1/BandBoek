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
        <div class="column">
            <?php
            $bandQuery = $pdo->query("SELECT * FROM advertentie WHERE isBand = 1");
            $advertenties = $bandQuery->fetchAll(PDO::FETCH_ASSOC);
            foreach ($advertenties as $advertentie) {
            ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $advertentie['titel']; ?></h5>
                        <p class="card-text"><?php echo $advertentie['advertentieText']; ?></p>
                        <a href="detail.php?id=<?php echo $advertentie['id']; ?>" class="btn btn-primary">Details</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>