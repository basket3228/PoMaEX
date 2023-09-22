<?php
require('../../function.php');
$parties = get_SApartyList();
$category_id = $_GET['category_id'];
$title = "PoMaEX | SA:SA-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="content">
            <h2>編成一覧</h2>
            <a href="add-LG.php?category_id=<?= special($category_id) ?>"><button id="btn">追加</button></a>
            <ul>
                <?php foreach ($parties as $party) { ?>
                    <?php if ($category_id == 3) { ?>
                        <li>
                            <a href="SA-party-list.php?SA_id=<?= special($party['SA_id']) ?>&category_id=<?= special($category_id) ?>">
                                <?= special($party['name']) ?></a>
                            <img src="../../img/<?= special($party['name']) ?>.png">
                            <a href="delete-LG.php?SA_id=<?= special($party['SA_id']) ?>&category_id=<?= special($category_id) ?>"><button id="btn">削除</button></a>
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