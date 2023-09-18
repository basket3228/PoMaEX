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
        <h2>ランダム編成生成</h2>
        <ul>
            <!-- 選びなおすボタンでそれぞれで再度乱数生成をする(JSで操作)
                    初期表示はロール被りなし、主人公被りは二枠までという条件で表示(主人公二枠なら残りは必ずEXキャラ) -->
            <li><img src="../../trainer/<?= special($attacker['trainer_name']) ?>.png">
                <img src="../../sync/<?= special($attacker['sync_name']) ?>.png">
                <button class="btn">選びなおす</button>
            </li>
            <li>
                <img src="../../trainer/<?= special($technical['trainer_name']) ?>.png">
                <img src="../../sync/<?= special($technical['sync_name']) ?>.png">
                <button class="btn">選びなおす</button>
            </li>
            <li><img src="../../trainer/<?= special($support['trainer_name']) ?>.png">
                <img src="../../sync/<?= special($support['sync_name']) ?>.png">
                <button class="btn">選びなおす</button>
            </li>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>