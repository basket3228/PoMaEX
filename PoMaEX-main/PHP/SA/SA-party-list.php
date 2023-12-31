<?php
require('../../function.php');

$SA_id = $_GET['SA_id'];
$parties = get_SAList($SA_id);
$title = "PoMaEX | SA:Party-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="content">
            <h2><?= SA ?></h2>
            <ul>
                <?php foreach ($parties as $party) { ?>
                    <?php if ($party['SAparty_id'] != null) { ?>
                        <li>
                            <a href="../General/party-detail.php?SAparty_id=<?= special($party['SAparty_id']) ?>">編成詳細へ</a>
                            <img src="../../trainer/<?= special($party['t1']) ?>.png">
                            <img src="../../trainer/<?= special($party['t2']) ?>.png">
                            <img src="../../trainer/<?= special($party['t3']) ?>.png">
                            <a href="delete-SA-list.php?SAparty_id=<?= special($party['SAparty_id']) ?>"><button class="delete">削除</button></a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>
