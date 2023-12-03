<?php
require('../../function.php');

$LG_id = $_GET['LG_id'];
$enemy_id = $_GET['enemy_id'];
$parties = get_party($LG_id, $enemy_id);
$enemy = get_particular_enemy($enemy_id);
$title = "PoMaEX | LG:search";
?>
<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2><?= LG ?></h2>
        <!-- ↓文字を大きく中央に -->
        <h2><?php echo special($enemy['enemy_name']) ?></h2>
        <ul>
            <?php foreach ($parties as $party) { ?>
                <?php if ($party['t2'] != null) { ?>
                    <li>
                        <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>">編成詳細へ</a>
                        <img src="../../trainer/<?= special($party['t1']) ?>.png">
                        <img src="../../trainer/<?= special($party['t2']) ?>.png">
                        <img src="../../trainer/<?= special($party['t3']) ?>.png">
                    </li>
                    <a href="delete-LG-list.php?LGparty_id=<?= $party['LGparty_id'] ?>&LG_id=<?= special($LG_id) ?>"><button class="delete">削除</button></a>
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