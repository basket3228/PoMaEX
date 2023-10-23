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
$title = "PoMaEX | LG:Solo-Info";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2 class="sub-title"><?php echo special($enemy['enemy_name']) ?></h2>
        <ul class="detail-list">
            <?php if ($enemy_id == 1) { ?>
                <?php foreach ($raiko as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 2) { ?>
                <?php foreach ($entei as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 3) { ?>
                <?php foreach ($latios as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 4) { ?>
                <?php foreach ($latias as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 5) { ?>
                <?php foreach ($terrakion as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 6) { ?>
                <?php foreach ($cobalion as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 7) { ?>
                <?php foreach ($moltres as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 8) { ?>
                <?php foreach ($cresselia as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 9) { ?>
                <?php foreach ($tornadus as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 10) { ?>
                <?php foreach ($tapu_bulu as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 11) { ?>
                <?php foreach ($azelf as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 12) { ?>
                <?php foreach ($uxie as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } else if ($enemy_id == 13) { ?>
                <?php foreach ($regirock as $solo) { ?>
                    <li class="party-detail CS-ノーマル-detail" style="margin-bottom: calc(16px + 1vw)">
                        <img src="../../trainer/<?= special($solo['trainer_name']) ?>.png">
                        <img class="party-detail-sync" src="../../sync/<?= special($solo['sync_name']) ?>.png">
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>