<?php
require('../../function.php');

$enemy_id = $_GET['enemy_id'];

$entei = get_entei($enemy_id);
$raiko = get_raiko($enemy_id);
$latios = get_latios($enemy_id);
$latias = get_latias($enemy_id);
$terrakion = get_terrakion($enemy_id);
$cobalion = get_cobalion($enemy_id);
$moltres = get_moltres($enemy_id);
$cresselia = get_cresselia($enemy_id);
$tornadus = get_tornadus($enemy_id);
$tapu_bulu = get_tapu_bulu($enemy_id);
$azelf = get_azelf($enemy_id);
$uxie = get_uxie($enemy_id);
$regirock = get_regirock($enemy_id);

$enemy = get_particular_enemy($enemy_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo-Info</title>
    <link rel="icon" href="../../img/logo.ico" />
</head>

<body>
    <div class="container">
        <main>
            <h2><?php echo special($enemy['enemy_name']) ?></h2>
            <div class="content">
                <ul>
                    <?php if ($enemy_id == 1) { ?>
                        <?php foreach ($raiko as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 2) { ?>
                        <?php foreach ($entei as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 3) { ?>
                        <?php foreach ($latios as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li><?php } ?>
                    <?php } else if ($enemy_id == 4) { ?>
                        <?php foreach ($latias as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 5) { ?>
                        <?php foreach ($terrakion as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 6) { ?>
                        <?php foreach ($cobalion as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 7) { ?>
                        <?php foreach ($moltres as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 8) { ?>
                        <?php foreach ($cresselia as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 9) { ?>
                        <?php foreach ($tornadus as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 10) { ?>
                        <?php foreach ($tapu_bulu as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 11) { ?>
                        <?php foreach ($azelf as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 12) { ?>
                        <?php foreach ($uxie as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } else if ($enemy_id == 13) { ?>
                        <?php foreach ($regirock as $solo) { ?>
                            <li>
                                <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                                <img src="../../sync/<?= special($solo['sync_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>
</body>

</html>