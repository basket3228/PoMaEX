<?php
require('../../function.php');
$parties = get_LGpartyList();
$category_id = $_GET['category_id'];
$title = "PoMaEX | LG:LG-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2>編成一覧</h2>
        <a href="info-list.php"><button>単騎情報</button></a>
        <a href="add-LG.php?category_id=<?= special($category_id) ?>"><button id="btn">追加</button></a>
        <ul>
            <?php foreach ($parties as $party) { ?>
                <?php if ($category_id == 1) { ?>
                    <li>
                        <a href="LG-party-list.php?LG_id=<?= special($party['LG_id']) ?>&category_id=<?= special($category_id) ?>">
                            <?= special($party['name']) ?></a>
                        <img src="../../img/LG<?= special($party['eventnumber']) ?>.png">
                        <a href="delete-LG.php?eventnumber=<?= special($party['eventnumber']) ?>&category_id=<?= special($category_id) ?>"><button id="btn">削除</button></a>
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