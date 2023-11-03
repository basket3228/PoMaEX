<?php
require('../../function.php');
$enemies = get_enemy();
$title = "PoMaEX | LG:Info-List";
?>

<?php require_once("../General/header.php") ?>

<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <ul class="two-columns">
            <?php foreach ($enemies as $enemy) { ?>
                <li class="info">
                    <div class="info-img"><img src="../../Legend_Battle/<?= special($enemy['enemy_name']) ?>.png"></div>
                    <a class="main-btn" href="solo-info.php?enemy_id=<?= special($enemy['enemy_id']) ?>">ソロ情報</a>
                </li>
            <?php } ?>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>