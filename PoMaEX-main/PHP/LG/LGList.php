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
        <h2 class="sub-title">編成一覧</h2>
        <a class="main-btn" href="info-list.php">単騎情報</a>
        <a class="main-btn LG-add-btn" href="add-LG.php?category_id=<?= special($category_id) ?>">追加</a>
        <ul class="LG-list">
            <?php foreach ($parties as $party) { ?>
                <?php if ($category_id == 1) { ?>
                    <li class="LG">
                        <a href="LG-party-list.php?LG_id=<?= special($party['LG_id']) ?>&category_id=<?= special($category_id) ?>">
                            <?= special($party['name']) ?>
                            <img src="../../img/LG<?= special($party['eventnumber']) ?>.png">
                        </a>
                        <button class="party-delete LG-delete delete-btn" data-delete="delete-LG.php?eventnumber=<?= special($party['eventnumber']) ?>&category_id=<?= special($category_id) ?>"></button>
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