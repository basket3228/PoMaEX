<?php
require('../../function.php');

if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
    $LG1 = LG1($LGparty_id);
    $LG2 = LG2($LGparty_id);
    $LG3 = LG3($LGparty_id);
    $memo = get_LGmemo($LGparty_id);
} else if (isset($_GET['CSparty_id'])) {
    $CSparty_id = $_GET['CSparty_id'];
    $CS1 = CS1($CSparty_id);
    $CS2 = CS2($CSparty_id);
    $CS3 = CS3($CSparty_id);
    $memo = get_CSmemo($CSparty_id);
} else if (isset($_GET['SAparty_id'])) {
    $SAparty_id = $_GET['SAparty_id'];
    $SA1 = SA1($SAparty_id);
    $SA2 = SA2($SAparty_id);
    $SA3 = SA3($SAparty_id);
    $memo = get_SAmemo($SAparty_id);
}
$trainers = get_trainer();
$luckyskills = get_luckyskill();

$title = "PoMaEX | CS:Party-detail";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="trainer">
            <h2 class="sub-title">パーティ編集</h2>
            <ul class="detail-list">
                <?php if (isset($_GET['LGparty_id'])) { ?>
                    <div class="party-wrap edit" data-partynum="1">
                        <?php foreach ($LG1 as $c1) { ?>
                            <?php if ($c1['t1'] != null) { ?>
                                <?php if ($c1['EX_Flg'] == true) { ?>
                                    <li class="party-detail edit-frame CS-<?= special($c1['tn1']) ?>-detail CS-EX-detail" data-type="<?= special($c1['tn1']) ?>" data-id="<?= special($c1['ti1']) ?>" draggable="false">
                                    <?php } else { ?>
                                    <li class="party-detail edit-frame CS-<?= special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>" data-id="<?= special($c1['ti1']) ?>" draggable="false">
                                    <?php } ?>
                                    <div class="stars">
                                        <?php if ($c1['star1'] == 1) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 2) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 3) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 4) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 5) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c1['EX_Flg'] == true) { ?>
                                            <img src="../../img/General/EX.png" draggable="false">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c1['t1']) ?>.png" draggable="false">
                                    <img class="party-detail-sync CS-<?php echo special($c1['tn1']) ?>-detail" src="../../sync/<?= special($c1['s1']) ?>.png" draggable="false">
                                    <div class="level">
                                        <?php echo special($c1['level']) ?>
                                    </div>
                                    <button class="edit-delete-btn party-delete"></button>
                                    </li>
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c1['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span>
                                        <select class="luckyskill">
                                            <option value="<?= special($c1['luckyskill_id']) ?>"><?php echo special($c1['luckyskill_name']) ?></option>
                                            <?php foreach ($luckyskills as $c1) { ?>
                                                <option value="<?= special($c1['luckyskill_id']) ?>"><?= special($c1['luckyskill_name']) ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- タイプ名<?php echo special($c1['tn1']) ?> -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                    <div class="party-wrap edit" data-partynum="2">
                        <?php foreach ($LG2 as $c2) { ?>
                            <?php if ($c2['t2'] == null) { ?>
                                <p>トレーナーを選択してください。</p>
                            <?php } else if ($c2['t2'] != null) { ?>
                                <?php if ($c2['EX_Flg'] == true) { ?>
                                    <li class="party-detail edit-frame CS-<?= special($c2['tn2']) ?>-detail CS-EX-detail" data-type=" <?= special($c2['tn2']) ?>" data-id="<?= special($c2['ti2']) ?>" draggable="false">
                                    <?php } else { ?>
                                    <li class="party-detail edit-frame CS-<?= special($c2['tn2']) ?>-detail" data-type=" <?= special($c2['tn2']) ?>" data-id="<?= special($c2['ti2']) ?>" draggable="false">
                                    <?php } ?>
                                    <p>2</p>
                                    <div class="stars">
                                        <?php if ($c2['star2'] == 1) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 2) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 3) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 4) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 5) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c2['EX_Flg'] == true) { ?>
                                            <img src="../../img/General/EX.png" draggable="false">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c2['t2']) ?>.png" draggable="false">
                                    <img class="party-detail-sync CS-<?php echo special($c2['tn2']) ?>-detail" src="../../sync/<?= special($c2['s2']) ?>.png" draggable="false">
                                    <div class="level">
                                        <?php echo special($c2['level']) ?>
                                    </div>
                                    <button class="edit-delete-btn party-delete"></button>
                                    </li>
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c2['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span>
                                        <select class="luckyskill">
                                            <option value="<?= special($c2['luckyskill_id']) ?>"><?php echo special($c2['luckyskill_name']) ?></option>
                                            <?php foreach ($luckyskills as $c2) { ?>
                                                <option value="<?= special($c2['luckyskill_id']) ?>"><?= special($c2['luckyskill_name']) ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- タイプ名<?php echo special($c2['tn2']) ?> -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                    <div class="party-wrap edit" data-partynum="3">
                        <?php foreach ($LG3 as $c3) { ?>
                            <?php if ($c3['t3'] != null) { ?>
                                <?php if ($c3['EX_Flg'] == true) { ?>
                                    <li class="party-detail edit-frame CS-<?= special($c3['tn3']) ?>-detail CS-EX-detail" data-type="<?= special($c3['tn3']) ?>" data-id="<?= special($c3['ti3']) ?>" draggable="false">
                                    <?php } else { ?>
                                    <li class="party-detail edit-frame CS-<?= special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>" data-id="<?= special($c3['ti3']) ?>" draggable="false">
                                    <?php } ?>
                                    <p>3</p>
                                    <div class="stars">
                                        <?php if ($c3['star3'] == 1) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 2) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 3) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 4) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 5) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c3['EX_Flg'] == true) { ?>
                                            <img src="../../img/General/EX.png" draggable="false">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c3['t3']) ?>.png" draggable="false">
                                    <img class="party-detail-sync CS-<?php echo special($c3['tn3']) ?>-detail" src="../../sync/<?= special($c3['s3']) ?>.png" draggable="false">
                                    <div class="level">
                                        <?php echo special($c3['level']) ?>
                                    </div>
                                    <button class="edit-delete-btn party-delete"></button>
                                    </li>
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c3['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span>
                                        <select class="luckyskill">
                                            <option value="<?= special($c3['luckyskill_id']) ?>"><?php echo special($c3['luckyskill_name']) ?></option>
                                            <?php foreach ($luckyskills as $c3) { ?>
                                                <option value="<?= special($c3['luckyskill_id']) ?>"><?= special($c3['luckyskill_name']) ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- タイプ名<?php echo special($c3['tn3']) ?> -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                <?php } else if (isset($_GET['CSparty_id'])) { ?>
                    <div class="party-wrap edit" data-partynum="1">
                        <?php foreach ($CS1 as $c1) { ?>
                            <?php if ($c1['t1'] != null) { ?>
                                <!-- 

                                        EXの背景をここから変えてくだし！！！！！！！！
                                        要素の順番を上三つと揃えてください！！（level）

                                    -->
                                <li class="party-detail edit-frame CS-<?= special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>" data-id="<?= special($c1['ti1']) ?>" draggable="false">
                                    <div class="stars">
                                        <?php if ($c1['star1'] == 1) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 2) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 3) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 4) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 5) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c1['EX_Flg'] == true) { ?>
                                            <img src="../../img/General/EX.png" draggable="false">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c1['t1']) ?>.png" draggable="false">
                                    <img class="party-detail-sync CS-<?php echo special($c1['tn1']) ?>-detail" src="../../sync/<?= special($c1['s1']) ?>.png" draggable="false">
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c1['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span><?php echo special($c1['luckyskill_name']) ?>
                                        <!-- タイプ名<?php echo special($c1['tn1']) ?> -->
                                        <?php echo special($c1['level']) ?>
                                    </div>
                                    <button class="edit-delete-btn party-delete"></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="party-wrap edit" data-partynum="2">
                        <?php foreach ($CS2 as $c2) { ?>
                            <?php if ($c2['t2'] == null) { ?>
                                <p>トレーナーを選択してください。</p>
                            <?php } else if ($c2['t2'] != null) { ?>
                                <li class="party-detail edit-frame CS-<?= special($c2['tn2']) ?>-detail data-type=" <?= special($c2['tn2']) ?>" data-id="<?= special($c2['ti2']) ?>" draggable="false">
                                    <p>2</p>
                                    <div class="stars">
                                        <?php if ($c2['star2'] == 1) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 2) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c1['star1'] == 3) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 4) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c2['star2'] == 5) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c2['EX_Flg'] == true) { ?>
                                            <img src="../../img/General/EX.png" draggable="false">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c2['t2']) ?>.png" draggable="false">
                                    <img class="party-detail-sync CS-<?php echo special($c2['tn2']) ?>-detail" src="../../sync/<?= special($c2['s2']) ?>.png" draggable="false">
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c2['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span><?php echo special($c2['luckyskill_name']) ?>
                                        <!-- タイプ名<?php echo special($c2['tn2']) ?> -->
                                        <?php echo special($c2['level']) ?>
                                    </div>
                                    <button class="edit-delete-btn party-delete"></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="party-wrap edit" data-partynum="3">
                        <?php foreach ($CS3 as $c3) { ?>
                            <?php if ($c3['t3'] != null) { ?>
                                <li class="party-detail edit-frame CS-<?= special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>" data-id="<?= special($c3['ti3']) ?>" draggable="false">
                                    <p>3</p>
                                    <div class="stars">
                                        <?php if ($c3['star3'] == 1) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 2) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 3) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 4) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/non_star.png" draggable="false">
                                        <?php } else if ($c3['star3'] == 5) { ?>
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                            <img src="../../img/General/star.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c3['EX_Flg'] == true) { ?>
                                            <img src="../../img/General/EX.png" draggable="false">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png" draggable="false">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c3['t3']) ?>.png" draggable="false">
                                    <img class="party-detail-sync CS-<?php echo special($c3['tn3']) ?>-detail" src="../../sync/<?= special($c3['s3']) ?>.png" draggable="false">
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c3['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span><?php echo special($c3['luckyskill_name']) ?>
                                        <!-- タイプ名<?php echo special($c3['tn3']) ?> -->
                                        <?php echo special($c3['level']) ?>
                                    </div>
                                    <button class="edit-delete-btn party-delete"></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- /////////////
ここからSAです
////////////// -->
                <?php } else if (isset($_GET['SAparty_id'])) { ?>
                    <li class="party-wrap edit" data-partynum="1">
                        <?php foreach ($SA1 as $c1) { ?>
                            <?php if ($c1['t1'] != null) { ?>
                    <li class="party-detail edit-frame CS-<?= special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>" data-id="<?= special($c1['ti1']) ?>" draggable="false">
                        <div class="stars">
                            <?php if ($c1['star1'] == 1) { ?>
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                            <?php } else if ($c1['star1'] == 2) { ?>
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                            <?php } else if ($c1['star1'] == 3) { ?>
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                            <?php } else if ($c1['star1'] == 4) { ?>
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/non_star.png" draggable="false">
                            <?php } else if ($c1['star1'] == 5) { ?>
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                                <img src="../../img/General/star.png" draggable="false">
                            <?php } ?>
                        </div>
                        <div class="EX">
                            <?php if ($c1['EX_Flg'] == true) { ?>
                                <img src="../../img/General/EX.png" draggable="false">
                            <?php } else { ?>
                                <img src="../../img/General/NotEX.png" draggable="false">
                            <?php } ?>
                        </div>
                        <img src="../../trainer/<?= special($c1['t1']) ?>.png" draggable="false">
                        <img class="party-detail-sync CS-<?php echo special($c1['tn1']) ?>-detail" src="../../sync/<?= special($c1['s1']) ?>.png" draggable="false">
                        <div class="potential">
                            <span>のびしろ：</span><?php echo special($c1['potential']) ?>/20
                        </div>
                        <div class="skill">
                            <span>ポテンシャル：<br></span><?php echo special($c1['luckyskill_name']) ?>
                            <!-- タイプ名<?php echo special($c1['tn1']) ?> -->
                            <?php echo special($c1['level']) ?>
                        </div>
                        <button class="edit-delete-btn party-delete"></button>
                    </li>
                <?php } ?>
            <?php } ?>
            </li>
            <li class="party-wrap edit" data-partynum="2">
                <?php foreach ($SA2 as $c2) { ?>
                    <?php if ($c2['t2'] == null) { ?>
                        <p>トレーナーを選択してください。</p>
                    <?php } else if ($c2['t2'] != null) { ?>
            <li class="party-detail edit-frame CS-<?= special($c2['tn2']) ?>-detail data-type=" <?= special($c2['tn2']) ?>" data-id="<?= special($c2['ti2']) ?>" draggable="false">
                <p>2</p>
                <div class="stars">
                    <?php if ($c2['star1'] == 1) { ?>
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                    <?php } else if ($c2['star2'] == 2) { ?>
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                    <?php } else if ($c2['star2'] == 3) { ?>
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                    <?php } else if ($c2['star2'] == 4) { ?>
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/non_star.png" draggable="false">
                    <?php } else if ($c2['star2'] == 5) { ?>
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                        <img src="../../img/General/star.png" draggable="false">
                    <?php } ?>
                </div>
                <div class="EX">
                    <?php if ($c2['EX_Flg'] == true) { ?>
                        <img src="../../img/General/EX.png" draggable="false">
                    <?php } else { ?>
                        <img src="../../img/General/NotEX.png" draggable="false">
                    <?php } ?>
                </div>
                <img src="../../trainer/<?= special($c2['t2']) ?>.png" draggable="false">
                <img class="party-detail-sync CS-<?php echo special($c2['tn2']) ?>-detail" src="../../sync/<?= special($c2['s2']) ?>.png" draggable="false">
                <div class="potential">
                    <span>のびしろ：</span><?php echo special($c2['potential']) ?>/20
                </div>
                <div class="skill">
                    <span>ポテンシャル：<br></span><?php echo special($c2['luckyskill_name']) ?>
                    <!-- タイプ名<?php echo special($c2['tn2']) ?> -->
                    <?php echo special($c2['level']) ?>
                </div>
                <button class="edit-delete-btn party-delete"></button>
            </li>
        <?php } ?>
    <?php } ?>
    </li>
    <li class="party-wrap edit" data-partynum="3">
        <?php foreach ($SA3 as $c3) { ?>
            <?php if ($c3['t3'] != null) { ?>
    <li class="party-detail edit-frame CS-<?= special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>" data-id="<?= special($c3['ti3']) ?>" draggable="false">
        <p>3</p>
        <div class="stars">
            <?php if ($c3['star3'] == 1) { ?>
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
            <?php } else if ($c3['star3'] == 2) { ?>
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
            <?php } else if ($c3['star3'] == 3) { ?>
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
            <?php } else if ($c3['star3'] == 4) { ?>
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/non_star.png" draggable="false">
            <?php } else if ($c3['star3'] == 5) { ?>
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
                <img src="../../img/General/star.png" draggable="false">
            <?php } ?>
        </div>
        <div class="EX">
            <?php if ($c3['EX_Flg'] == true) { ?>
                <img src="../../img/General/EX.png" draggable="false">
            <?php } else { ?>
                <img src="../../img/General/NotEX.png" draggable="false">
            <?php } ?>
        </div>
        <img src="../../trainer/<?= special($c3['t3']) ?>.png" draggable="false">
        <img class="party-detail-sync CS-<?php echo special($c3['tn3']) ?>-detail" src="../../sync/<?= special($c3['s3']) ?>.png" draggable="false">
        <div class="potential">
            <span>のびしろ：</span><?php echo special($c3['potential']) ?>/20
        </div>
        <div class="skill">
            <span>ポテンシャル：<br></span><?php echo special($c3['luckyskill_name']) ?>
            <!-- タイプ名<?php echo special($c3['tn3']) ?> -->
            <?php echo special($c3['level']) ?>
        </div>
        <button class="edit-delete-btn party-delete"></button>
    </li>
<?php } ?>
<?php } ?>
</li>
<?php } ?>
            </ul>
        </div>
        <?php if (isset($_GET['LGparty_id'])) { ?>
            <form method="post" class="party-edit">
                <input type="hidden" name="LGparty_id" value="<?= special($LGparty_id) ?>">
                <input type="hidden" name="luckyskill_id1" value="">
                <input type="hidden" name="luckyskill_id2" value="">
                <input type="hidden" name="luckyskill_id3" value="">
                <input type="hidden" name="trainer_id1" value="">
                <input type="hidden" name="trainer_id2" value="">
                <input type="hidden" name="trainer_id3" value="">
                <input type="button" value="送信" class="party-edit-submit">
                <aside class="layer">
                    <?php if ($memo['memo'] != null) { ?>
                        <input type="text" name="memo" value="<?= special($memo['memo']) ?>">
                    <?php } ?>
                </aside>
            </form>
        <?php } else if (isset($_GET['CSparty_id'])) { ?>
            <form method="post" class="party-edit">
                <input type="hidden" name="LGparty_id" value="<?= special($CSparty_id) ?>">
                <select name="luckyskill_id1">
                    <option value="">--選択してください--</option>
                    <?php foreach ($luckyskills as $c1) { ?>
                        <option value="<?= special($c1['luckyskill_id']) ?>"><?= special($c1['luckyskill_name']) ?></option>
                    <?php } ?>
                </select>
                <select name="luckyskill_id2">
                    <option value="">--選択してください--</option>
                    <?php foreach ($luckyskills as $c2) { ?>
                        <option value="<?= special($c2['luckyskill_id']) ?>"><?= special($c2['luckyskill_name']) ?></option>
                    <?php } ?>
                </select>
                <select name="luckyskill_id3">
                    <option value="">--選択してください--</option>
                    <?php foreach ($luckyskills as $c3) { ?>
                        <option value="<?= special($c3['luckyskill_id']) ?>"><?= special($c3['luckyskill_name']) ?></option>
                    <?php } ?>
                </select>
                <input type="number" name="potential">
                <input type="text" name="memo">
                <input type="hidden" name="trainer_id1" value="">
                <input type="hidden" name="trainer_id2" value="">
                <input type="hidden" name="trainer_id3" value="">
                <input type="button" value="送信" class="party-edit-submit">
                <aside class="layer">
                    <?php if ($memo['memo'] != null) { ?>
                        <input type="text" name="memo" value="<?= special($memo['memo']) ?>">
                    <?php } ?>
                </aside>
            </form>
        <?php } else if (isset($_GET['SAparty_id'])) { ?>
            <form method="post" class="party-edit">
                <input type="hidden" name="LGparty_id" value="<?= special($SAparty_id) ?>">
                <select name="luckyskill_id1">
                    <option value="">--選択してください--</option>
                    <?php foreach ($luckyskills as $c1) { ?>
                        <option value="<?= special($c1['luckyskill_id']) ?>"><?= special($c1['luckyskill_name']) ?></option>
                    <?php } ?>
                </select>
                <select name="luckyskill_id2">
                    <option value="">--選択してください--</option>
                    <?php foreach ($luckyskills as $c2) { ?>
                        <option value="<?= special($c2['luckyskill_id']) ?>"><?= special($c2['luckyskill_name']) ?></option>
                    <?php } ?>
                </select>
                <select name="luckyskill_id3">
                    <option value="">--選択してください--</option>
                    <?php foreach ($luckyskills as $c3) { ?>
                        <option value="<?= special($c3['luckyskill_id']) ?>"><?= special($c3['luckyskill_name']) ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="trainer_id1" value="">
                <input type="hidden" name="trainer_id2" value="">
                <input type="hidden" name="trainer_id3" value="">
                <input type="button" value="送信" class="party-edit-submit">
                <aside class="layer">
                    <?php if ($memo['memo'] != null) { ?>
                        <input type="text" name="memo" value="<?= special($memo['memo']) ?>">
                    <?php } ?>
                </aside>
            </form>
        <?php } ?>
    </main>
    <aside class="sidebar">
        <ul class="edit-trainer">
            <?php foreach ($trainers as $trainer) { ?>
                <li class="party-detail CS-<?php echo special($trainer['type_name']) ?>-detail column-2_item edit-drag" style="margin-bottom: calc(16px + 1vw)" data-stars="<?= $trainer['stars'] ?>" data-ex="<?= $trainer['EX_flg'] ?>" data-type="<?= $trainer['type_name'] ?>" data-id="<?= $trainer['trainer_id'] ?>" draggable="true">
                    <div class="role">
                        <?php if ($trainer['role_name'] == 'アタッカー') { ?>
                            <img src="../../img/General/アタッカー.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'テクニカル') { ?>
                            <img src="../../img/General/テクニカル.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'サポート') { ?>
                            <img src="../../img/General/サポート.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'スピード') { ?>
                            <img src="../../img/General/スピード.png" draggable="false">
                        <?php } else if ($trainer['role_name'] == 'フィールド') { ?>
                            <img src="../../img/General/フィールド.png" draggable="false">
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
