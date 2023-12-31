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
$registeel = get_registeel($enemy_id);

$enteiCount = get_enteiSolo();
$raikoCount = get_raikoSolo();
$latiosCount = get_latiosSolo();
$latiasCount = get_latiasSolo();
$terrakionCount = get_terrakionSolo();
$cobalionCount = get_cobalionSolo();
$moltresCount = get_moltresSolo();
$cresseliaCount = get_cresseliaSolo();
$tornadusCount = get_tornadusSolo();
$tapu_buluCount = get_tapu_buluSolo();
$azelfCount = get_azelfSolo();
$uxieCount = get_uxieSolo();
$regirockCount = get_regirockSolo();
$registeelCount = get_registeelSolo();

$enemy = get_particular_enemy($enemy_id);
$title = "PoMaEX | LG:Solo-Info";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="flex-title">
            <h2 class="sub-title"><?php echo special($enemy['enemy_name']) ?></h2>
            <div class="down">
                <img src="../../img/General/down.png" alt="down">
            </div>
        </div>
        <ul class="detail-list relative">
            <?php if ($enemy_id == 1) { ?>
                <div class="detail-list-count"><?php echo $enteiCount ?></div>
                <?php foreach ($raiko as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 2) { ?>
                <div class="detail-list-count"><?php echo $raikoCount ?></div>
                <?php foreach ($entei as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 3) { ?>
                <div class="detail-list-count"><?php echo $latiosCount ?></div>
                <?php foreach ($latios as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 4) { ?>
                <div class="detail-list-count"><?php echo $latiasCount ?></div>
                <?php foreach ($latias as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 5) { ?>
                <div class="detail-list-count"><?php echo $terrakionCount ?></div>
                <?php foreach ($terrakion as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 6) { ?>
                <div class="detail-list-count"><?php echo $cobalionCount ?></div>
                <?php foreach ($cobalion as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 7) { ?>
                <div class="detail-list-count"><?php echo $moltresCount ?></div>
                <?php foreach ($moltres as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 8) { ?>
                <div class="detail-list-count"><?php echo $cresseliaCount ?></div>
                <?php foreach ($cresselia as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 9) { ?>
                <div class="detail-list-count"><?php echo $tornadusCount ?></div>
                <?php foreach ($tornadus as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 10) { ?>
                <div class="detail-list-count"><?php echo $tapu_buluCount ?></div>
                <?php foreach ($tapu_bulu as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 11) { ?>
                <div class="detail-list-count"><?php echo $azelfCount ?></div>
                <?php foreach ($azelf as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 12) { ?>
                <div class="detail-list-count"><?php echo $uxieCount ?></div>
                <?php foreach ($uxie as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 13) { ?>
                <div class="detail-list-count"><?php echo $regirockCount ?></div>
                <?php foreach ($regirock as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 14) { ?>
                <div class="detail-list-count"><?php echo $registeelCount ?></div>
                <?php foreach ($registeel as $solo) { ?>
                    <li class="party-wrap">
                        <div class="party-detail CS-<?= special($solo['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
                            <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                            <img class="party-detail-sync  CS-<?= special($solo['type_name']) ?>-detail" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                        </div>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
        <div class="up">
            <img src="../../img/General/up.png" alt="up">
        </div>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>