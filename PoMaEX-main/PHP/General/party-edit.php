<?php
require('../../function.php');

$category_id = $_GET['category_id'];
if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
    if ($category_id == 1) {
        $LG1 = LG1($LGparty_id);
        $LG2 = LG2($LGparty_id);
        $LG3 = LG3($LGparty_id);
        $memo = get_LGmemo($LGparty_id);
    }
} else if (isset($_GET['CSparty_id'])) {
    $CSparty_id = $_GET['CSparty_id'];
    if ($category_id == 2) {
    }
} else if (isset($_GET['SAparty_id'])) {
    $SAparty_id = $_GET['SAparty_id'];
}

$trainers = get_trainer();

$title = "PoMaEX | CS:Party-detail edit-frame";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="trainer">
            <h2 class="sub-title">パーティ編集</h2>
            <ul class="detail-list">
                <?php if ($category_id == 1) { ?>
                    <div class="party-wrap edit" data-partynum="1">
                        <?php foreach ($LG1 as $c1) { ?>
                            <?php if ($c1['t1'] != null) { ?>
                                <li class="party-detail edit-frame CS-<?= special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>">
                                    <div class="stars">
                                        <?php if ($c1['star1'] == 1) { ?>
                                            <img src="../../img/star.png">
                                        <?php } else if ($c1['star1'] == 2) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c1['star1'] == 3) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c1['star1'] == 4) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c1['star1'] == 5) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c1['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c1['t1']) ?>.png">
                                    <img class="party-detail-sync" src="../../sync/<?= special($c1['s1']) ?>.png">
                                    <div class="skill">
                                        <!-- タイプ名<?php echo special($c1['tn1']) ?> -->
                                    </div>
                                    <button class="delete-btn party-delete" data-delete="../LG/delete-LGparty.php?LGparty_id=<?= special($LGparty_id) ?>&trainer_id1=<?= special($c1['ti1']) ?>&category_id=<?= special($category_id) ?>"></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="party-wrap edit" data-partynum="2">
                        <?php foreach ($LG2 as $c2) { ?>
                            <?php if ($c2['t2'] == null) { ?>
                                <p>トレーナーを選択してください。</p>
                            <?php } else if ($c2['t2'] != null) { ?>
                                <li class="party-detail edit-frame CS-<?= special($c2['tn2']) ?>-detail data-type=" <?= special($c2['tn2']) ?>">
                                    <p>2</p>
                                    <div class="stars">
                                        <?php if ($c2['star2'] == 1) { ?>
                                            <img src="../../img/star.png">
                                        <?php } else if ($c2['star2'] == 2) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c2['star2'] == 3) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c2['star2'] == 4) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c2['star2'] == 5) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c2['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c2['t2']) ?>.png">
                                    <img class="party-detail-sync" src="../../sync/<?= special($c2['s2']) ?>.png">
                                    <div class="skill">
                                        <!-- タイプ名<?php echo special($c2['tn2']) ?> -->
                                    </div>
                                    <button class="delete-btn party-delete" data-delete="../LG/delete-LGparty.php?LGparty_id=<?= special($LGparty_id) ?>&trainer_id2=<?= special($c2['ti2']) ?>&category_id=<?= special($category_id) ?>"></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="party-wrap edit" data-partynum="3">
                        <?php foreach ($LG3 as $c3) { ?>
                            <?php if ($c3['t3'] != null) { ?>
                                <li class="party-detail edit-frame CS-<?= special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>">
                                    <p>3</p>
                                    <div class="stars">
                                        <?php if ($c3['star3'] == 1) { ?>
                                            <img src="../../img/star.png">
                                        <?php } else if ($c3['star3'] == 2) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c3['star3'] == 3) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c3['star3'] == 4) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } else if ($c3['star3'] == 5) { ?>
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                            <img src="../../img/star.png">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c3['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c3['t3']) ?>.png">
                                    <img class="party-detail-sync" src="../../sync/<?= special($c3['s3']) ?>.png">
                                    <div class="skill">
                                        <!-- タイプ名<?php echo special($c3['tn3']) ?> -->
                                    </div>
                                    <button class="delete-btn party-delete" data-delete="../LG/delete-LGparty.php?LGparty_id=<?= special($LGparty_id) ?>&trainer_id3=<?= special($c3['ti3']) ?>&category_id=<?= special($category_id) ?>"></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } ?>
            </ul>
        </div>
        <form action="party-edit-post.php" method="post" class="party-edit">
            <aside class="layer">
                <?php if ($memo['memo'] != null) { ?>
                    <input class="edit-memo" type="text" value="<?php echo special($memo['memo']) ?>">
                <?php } else { ?>
                    <input class="edit-memo" type="text" value="">
                <?php } ?>
            </aside>

        </form>
    </main>
    <aside class="sidebar">
        <ul class="edit-trainer">
            <?php foreach ($trainers as $trainer) { ?>
                <li class="party-detail CS-<?php echo special($trainer['type_name']) ?>-detail column-2_item edit-drag" style="margin-bottom: calc(16px + 1vw)" data-stars="<?= $trainer['stars'] ?>" data-ex="<?= $trainer['EX_flg'] ?>" data-type="<?= $trainer['type_name'] ?>" draggable="true">
                    <div class="role">
                        <?php if ($trainer['role_name'] == 'アタッカー') { ?>
                            <img src="../../img/アタッカー.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'テクニカル') { ?>
                            <img src="../../img/テクニカル.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'サポート') { ?>
                            <img src="../../img/サポート.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'スピード') { ?>
                            <img src="../../img/スピード.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'フィールド') { ?>
                            <img src="../../img/フィールド.png" draggable="false">
                        <?php } ?>
                    </div>
                    <img class="party-detail-trainer" src="../../trainer/<?= special($trainer['trainer_name']) ?>.png" draggable="false">
                    <img class="party-detail-sync CS-<?php echo special($trainer['type_name']) ?>-detail" src="../../sync/<?= special($trainer['sync_name']) ?>.png" draggable="false">
                </li>
            <?php } ?>
        </ul>
    </aside>
</div>
<?php require_once('../General/footer.php');
