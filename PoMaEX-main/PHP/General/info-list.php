<?php
require('../../function.php');
$enemies = get_enemy();
$title = "PoMaEX | LG:Info-List";
?>

<?php require_once("../General/header.php") ?>

<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <?php foreach ($enemies as $enemy) { ?>
            <a href="solo-info.php?enemy_id=<?= special($enemy['enemy_id']) ?>"><button>ソロ情報</button></a>
            <img src="../../Legend_Battle/<?= special($enemy['enemy_name']) ?>.png">
        <?php } ?>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>