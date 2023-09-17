<?php
require('../../function.php');
$enemies = get_enemy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legend-Gauntlet</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
</head>

<body>
    <div class="container">
        <main>
            <div class="content">
                <?php foreach ($enemies as $enemy) { ?>
                    <img src="../../trainer/<?= special($enemy['enemy_name']) ?>.png">
                <?php } ?>
            </div>
        </main>
    </div>
    <script></script>
</body>

</html>