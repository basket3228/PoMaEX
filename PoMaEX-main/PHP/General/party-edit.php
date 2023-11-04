<?php
require('../../function.php');

$category_id = $_GET['category_id'];
if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
    if ($category_id == 1) {
    }
} else if (isset($_GET['CSparty_id'])) {
    $CSparty_id = $_GET['CSparty_id'];
    if ($category_id == 2) {
    }
} else if (isset($_GET['SAparty_id'])) {
    $SAparty_id = $_GET['SAparty_id'];
}

$trainers = get_trainer();

$title = "PoMaEX | CS:Party-detail";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="trainer">
            <h2 class="sub-title">パーティ編集</h2>
        </div>
    </main>
</div>
<aside class="sidebar">
    <?php foreach ($trainers as $trainer) { ?>
        <li class="party-detail CS-<?php echo special($trainer['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
            <div class="role">
                <?php if ($trainer['role_name'] == 'アタッカー') { ?>
                    <img src="../../img/アタッカー.png">
                <?php } else if ($trainer['role_name'] == 'テクニカル') { ?>
                    <img src="../../img/テクニカル.png">
                <?php } else if ($trainer['role_name'] == 'サポート') { ?>
                    <img src="../../img/サポート.png">
                <?php } else if ($trainer['role_name'] == 'スピード') { ?>
                    <img src="../../img/スピード.png">
                <?php } else if ($trainer['role_name'] == 'フィールド') { ?>
                    <img src="../../img/フィールド.png">
                <?php } ?>
            </div>
            <img src="../../trainer/<?= special($trainer['trainer_name']) ?>.png">
            <img class="party-detail-sync CS-<?php echo special($trainer['type_name']) ?>-detail" src="../../sync/<?= special($trainer['sync_name']) ?>.png">
        </li>
    <?php } ?>
</aside>
<?php require_once('../General/footer.php');
