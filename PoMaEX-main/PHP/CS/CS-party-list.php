<?php
require('../../function.php');
$category_id = $_GET['category_id'];
$type_id = $_GET['type_id'];
$parties = get_CSList($type_id);
$types = get_type();
$title = "PoMaEX | CS:Party-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="content">
            <h2>
                <?php foreach ($types as $type) { ?>
                    <?php if ($type['type_id'] == $type_id) { ?>
                        <img src="../../type/<?= special($type['type_name']) ?>.png">
                    <?php } ?>
                <?php } ?>
            </h2>
            <ul>
                <?php foreach ($parties as $party) { ?>
                    <?php if ($party['CSparty_id'] != null) { ?>
                        <li>
                            <a href="../General/party-detail.php?CSparty_id=<?= special($party['CSparty_id']) ?>&category_id=<?= $category_id ?>">編成詳細へ</a>
                            <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                            <a href="delete-CS-list.php?type_id=<?= $type_id ?>&category_id=<?= $category_id ?>&CSparty_id=<?= $party['CSparty_id'] ?>"><button class="delete">削除</button></a>
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