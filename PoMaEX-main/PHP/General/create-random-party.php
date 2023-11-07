<?php
require('../../function.php');

$trainer1 = get_attacker();
$trainer2 = get_technical();
$trainer3 = get_support();
$attacker = $trainer1[array_rand($trainer1)];
$technical = $trainer2[array_rand($trainer2)];
$support = $trainer3[array_rand($trainer3)];

$title = "PoMaEX | Random-Party";
?>
<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2 class="sub-title">ランダム編成生成</h2>
        <!-- 選びなおすボタンでページを更新する -->
        <button class="btn main-btn random-btn">選びなおす</button>
        <ul class="detail-list">
            <li class="party-detail">
                <img src="../../trainer/<?= special($attacker['trainer_name']) ?>.png">
                <img class="party-detail-sync" src="../../sync/<?= special($attacker['sync_name']) ?>.png">
            </li>
            <li class="party-detail">
                <img src="../../trainer/<?= special($technical['trainer_name']) ?>.png">
                <img class="party-detail-sync" src="../../sync/<?= special($technical['sync_name']) ?>.png">
            </li>
            <li class="party-detail">
                <img src="../../trainer/<?= special($support['trainer_name']) ?>.png">
                <img class="party-detail-sync" src="../../sync/<?= special($support['sync_name']) ?>.png">
            </li>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>
