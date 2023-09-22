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
            <div class="CS-title">
                <?php foreach ($types as $type) { ?>
                    <?php if ($type['type_id'] == $type_id) { ?>
                        <img src="../../type/<?= special($type['type_name']) ?>.png">
                        <h2 class="CS-type-title"><?= special($type['type_name']) ?>タイプ</h2>
                        <?php $pageType = special($type['type_name']) ?>
                    <?php } ?>
                <?php } ?>
            </div>
            <ul class="party-list">
                <?php foreach ($parties as $party) { ?>
                    <?php if ($party['CSparty_id'] != null) { ?>

                        <?php for ($i = 0; $i < 5; $i++) { ?><!-- テスト用 --->
                            <li class="party CS-<?= $pageType ?>">
                                <a href="../General/party-detail.php?CSparty_id=<?= special($party['CSparty_id']) ?>&category_id=<?= special($category_id) ?>">
                                    <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                </a>
                                <button class="party-delete" data-delete="delete-CS-list.php?type_id=<?= special($type_id) ?>&category_id=<?= special($category_id) ?>&CSparty_id=<?= special($party['CSparty_id']) ?>"></button>
                            </li>
                        <?php } ?>

                        <li>
                            <a href="../General/party-detail.php?CSparty_id=<?= special($party['CSparty_id']) ?>&category_id=<?= special($category_id) ?>">編成詳細へ</a>
                            <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                            <a href="delete-CS-list.php?type_id=<?= special($type_id) ?>&category_id=<?= special($category_id) ?>&CSparty_id=<?= special($party['CSparty_id']) ?>"><button class="delete">削除</button></a>
                        </li>

                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<?php require_once('../General/footer.php') ?>