<?php
session_start();
include __DIR__ . '/index.php';
?>

<div class="container">
    <?php

        echo "<h1>Sei la tua password casuale è: {$_SESSION['password']}</h1>";

        ?>
</div>
</body>