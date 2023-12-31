<?php
require('../../function.php');

global $titleParameter;

if (isset($_GET['type'])) {
    $pageType = $_GET['type'];
}
if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
    $LG1 = LG1($LGparty_id);
    $LG2 = LG2($LGparty_id);
    $LG3 = LG3($LGparty_id);
    $URL = get_LGURL($LGparty_id);
    $memo = get_LGmemo($LGparty_id);
    $titleParameter = "LG";
} else if (isset($_GET['CSparty_id'])) {
    $CSparty_id = $_GET['CSparty_id'];
    $CS1 = CS1($CSparty_id);
    $CS2 = CS2($CSparty_id);
    $CS3 = CS3($CSparty_id);
    $URL = get_CSURL($CSparty_id);
    $memo = get_CSmemo($CSparty_id);
    $titleParameter = "CS";
} else if (isset($_GET['SAparty_id'])) {
    $SAparty_id = $_GET['SAparty_id'];
    $SA1 = SA1($SAparty_id);
    $SA2 = SA2($SAparty_id);
    $SA3 = SA3($SAparty_id);
    $URL = get_SAURL($SAparty_id);
    $memo = get_SAmemo($SAparty_id);
    $titleParameter = "SA";
}
$title = "PoMaEX | " . $titleParameter . ":Party-detail";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="trainer">
            <h2 class="sub-title">パーティ詳細</h2>
            <?php if (isset($_GET['LGparty_id'])) { ?>
                <a class="main-btn mb32" href="party-edit.php?LGparty_id=<?= special($LGparty_id) ?>">パーティ編集へ</a>
            <?php } else if (isset($_GET['CSparty_id'])) { ?>
                <a class="main-btn mb32" href="party-edit.php?CSparty_id=<?= special($CSparty_id) ?>">パーティ編集へ</a>
            <?php } else if (isset($_GET['SAparty_id'])) { ?>
                <a class="main-btn mb32" href="party-edit.php?SAparty_id=<?= special($SAparty_id) ?>">パーティ編集へ</a>
            <?php } ?>
            <ul class="detail-list">
                <?php if (isset($_GET['LGparty_id'])) { ?>
                    <div class="party-wrap">
                        <?php foreach ($LG1 as $c1) { ?>
                            <?php if ($c1['t1'] != null) { ?>
                                <?php if ($c1['EX_Flg'] && $c1['EXable'] == true) { ?>
                                    <li class="party-detail CS-<?= special($c1['tn1']) ?>-detail CS-EX-detail" data-type="<?= special($c1['tn1']) ?>">
                                    <?php } else { ?>
                                    <li class="party-detail CS-<?= special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>">
                                    <?php } ?>
                                    <div class="stars">
                                        <?php if ($c1['star1'] == 1) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c1['star1'] == 2) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c1['star1'] == 3) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c1['star1'] == 4) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c1['star1'] == 5) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c1['EX_Flg'] && $c1['EXable'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c1['t1']) ?>.png">
                                    <img class="party-detail-sync CS-<?php echo special($c1['tn1']) ?>-detail" src="../../sync/<?= special($c1['s1']) ?>.png">
                                    <div class="level">
                                        <?php echo special($c1['level']) ?>
                                    </div>
                                    </li>
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c1['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span><?php echo special($c1['luckyskill_name']) ?>
                                        <!-- タイプ名<?php echo special($c1['tn1']) ?> -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                    <div class="party-wrap">
                        <?php foreach ($LG2 as $c2) { ?>
                            <?php if ($c2['t2'] == null) { ?>
                                <p>トレーナーを選択してください。</p>
                                <button>選択する</button>
                            <?php } else if ($c2['t2'] != null) { ?>
                                <?php if ($c2['EX_Flg'] && $c2['EXable'] == true) { ?>
                                    <li class="party-detail CS-<?= special($c2['tn2']) ?>-detail CS-EX-detail" data-type="<?= special($c2['tn2']) ?>">
                                    <?php } else { ?>
                                    <li class="party-detail CS-<?= special($c2['tn2']) ?>-detail" data-type="<?= special($c2['tn2']) ?>">
                                    <?php } ?>
                                    <p>2</p>
                                    <div class="stars">
                                        <?php if ($c2['star2'] == 1) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c2['star2'] == 2) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c2['star2'] == 3) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c2['star2'] == 4) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c2['star2'] == 5) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c2['EX_Flg'] && $c2['EXable'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c2['t2']) ?>.png">
                                    <img class="party-detail-sync CS-<?php echo special($c2['tn2']) ?>-detail" src="../../sync/<?= special($c2['s2']) ?>.png">
                                    <div class="level">
                                        <?php echo special($c2['level']) ?>
                                    </div>
                                    </li>
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c2['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span><?php echo special($c2['luckyskill_name']) ?>
                                        <!-- タイプ名<?php echo special($c2['tn2']) ?> -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                    <div class="party-wrap">
                        <?php foreach ($LG3 as $c3) { ?>
                            <?php if ($c3['t3'] != null) { ?>
                                <?php if ($c3['EX_Flg'] && $c3['EXable'] == true) { ?>
                                    <li class="party-detail CS-<?= special($c3['tn3']) ?>-detail CS-EX-detail" data-type="<?= special($c3['tn3']) ?>">
                                    <?php } else { ?>
                                    <li class="party-detail CS-<?= special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>">
                                    <?php } ?>
                                    <p>3</p>
                                    <div class="stars">
                                        <?php if ($c3['star3'] == 1) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c3['star3'] == 2) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c3['star3'] == 3) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c3['star3'] == 4) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/non_star.png">
                                        <?php } else if ($c3['star3'] == 5) { ?>
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                            <img src="../../img/General/star.png">
                                        <?php } ?>
                                    </div>
                                    <div class="EX">
                                        <?php if ($c3['EX_Flg'] && $c3['EXable'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($c3['t3']) ?>.png">
                                    <img class="party-detail-sync CS-<?php echo special($c3['tn3']) ?>-detail" src="../../sync/<?= special($c3['s3']) ?>.png">
                                    <div class="level">
                                        <?php echo special($c3['level']) ?>
                                    </div>
                                    </li>
                                    <div class="potential">
                                        <span>のびしろ：</span><?php echo special($c3['potential']) ?>/20
                                    </div>
                                    <div class="skill">
                                        <span>ポテンシャル：<br></span><?php echo special($c3['luckyskill_name']) ?>
                                        <!-- タイプ名<?php echo special($c3['tn3']) ?> -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                <?php } else if (isset($_GET['CSparty_id'])) { ?>
                    <div class="party-wrap">
                        <?php foreach ($CS1 as $c1) { ?>
                            <?php if ($CSparty_id == $c1['CSparty_id']) { ?>
                                <?php if ($c1['t1'] != null) { ?>
                                    <!--

                                        EXの背景をここから変えてくだし！！！！！！！！
                                        要素の順番を上三つと揃えてください！！（level）

                                    -->
                                    <li class="party-detail CS-<?php echo special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>">
                                        <p>1</p>
                                        <div class="stars">
                                            <?php if ($c1['star1'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($c1['EX_Flg'] && $c1['EXable'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c1['t1']) ?>.png">
                                        <img class="party-detail-sync CS-<?php echo special($c1['tn1']) ?>-detail" src="../../sync/<?= special($c1['s1']) ?>.png">
                                        <div class="potential">
                                            <span>のびしろ：</span><?php echo special($c1['potential']) ?>/20
                                        </div>
                                        <div class="skill">
                                            <span>ポテンシャル：<br></span><?php echo special($c1['luckyskill_name']) ?>
                                            <?php echo special($c1['level']) ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($CS2 as $c2) { ?>
                                <?php if ($c2['t2'] == null) { ?>
                                    <p>トレーナーを選択してください。</p>
                                    <button>選択する</button>
                                <?php } else if ($c2['t2'] != null) { ?>
                                    <li class="party-detail CS-<?php echo special($c2['tn2']) ?>-detail" data-type="<?= special($c2['tn2']) ?>">
                                        <p>2</p>
                                        <div class="stars">
                                            <?php if ($c2['star2'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($c2['EX_Flg'] && $c2['EXable'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c2['t2']) ?>.png">
                                        <img class="party-detail-sync CS-<?php echo special($c2['tn2']) ?>-detail" src="../../sync/<?= special($c2['s2']) ?>.png">
                                        <div class="potential">
                                            <span>のびしろ：</span><?php echo special($c2['potential']) ?>/20
                                        </div>
                                        <div class="skill">
                                            <span>ポテンシャル：<br></span><?php echo special($c2['luckyskill_name']) ?>
                                        </div>
                                        <?php echo special($c2['level']) ?>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($CS3 as $c3) { ?>
                                <?php if ($c3['t3'] != null) { ?>
                                    <li class="party-detail CS-<?php echo special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>">
                                        <p>3</p>
                                        <div class="stars">
                                            <?php if ($c3['star3'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($c3['EX_Flg'] && $c3['EXable'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c3['t3']) ?>.png">
                                        <img class="party-detail-sync CS-<?php echo special($c3['tn3']) ?>-detail" src="../../sync/<?= special($c3['s3']) ?>.png">
                                        <div class="potential">
                                            <span>のびしろ：</span><?php echo special($c3['potential']) ?>/20
                                        </div>
                                        <div class="skill">
                                            <span>ポテンシャル：<br></span><?php echo special($c3['luckyskill_name']) ?>
                                        </div>
                                        <?php echo special($c3['level']) ?>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                <?php } else if (isset($_GET['SAparty_id'])) { ?>
                    <?php foreach ($SA1 as $c1) { ?>
                        <?php if ($SAparty_id == $c1['SAparty_id']) { ?>
                            <?php if ($c1['t1'] != null) { ?>
                                <li class="party-wrap">
                                    <div class="party-detail CS-<?= special($c1['tn1']) ?>-detail" data-type="<?= special($c1['tn1']) ?>">
                                        <p>1</p>
                                        <div class="stars">
                                            <?php if ($c1['star1'] && $c1['EXable'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c1['star1'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($c1['EX_Flg'] && $c1['EXable'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c1['t1']) ?>.png">
                                        <img class="party-detail-sync CS-<?php echo special($c1['tn1']) ?>-detail" src="../../sync/<?= special($c1['s1']) ?>.png">
                                        <div class="potential">
                                            <span>のびしろ：</span><?php echo special($c1['potential']) ?>/20
                                        </div>
                                        <div class="skill">
                                            <span>ポテンシャル：<br></span><?php echo special($c1['luckyskill_name']) ?>
                                        </div>
                                        <?php echo special($c1['level']) ?>
                                        <a href="../SA/delete-SAparty.php?SAparty_id=<?= special($SAparty_id) ?>&trainer_id1=<?= special($c1['ti1']) ?>"><button id="delete">削除</button></a>
                                    </div>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <?php foreach ($SA2 as $c2) { ?>
                            <?php if ($c2['t2'] == null) { ?>
                                <p>トレーナーを選択してください。</p>
                                <button>選択する</button>
                            <?php } else if ($c2['t2'] != null) { ?>
                                <li class="party-wrap">
                                    <div class="party-detail CS-<?= special($c2['tn2']) ?>-detail" data-type="<?= special($c2['tn2']) ?>">
                                        <p>2</p>
                                        <div class="stars">
                                            <?php if ($c2['star2'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c2['star2'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($c2['EX_Flg'] && $c2['EXable'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c2['t2']) ?>.png">
                                        <img class="party-detail-sync CS-<?php echo special($c2['tn2']) ?>-detail" src="../../sync/<?= special($c2['s2']) ?>.png">
                                        <div class="potential">
                                            <span>のびしろ：</span><?php echo special($c2['potential']) ?>/20
                                        </div>
                                        <div class="skill">
                                            <span>ポテンシャル：<br></span><?php echo special($c2['luckyskill_name']) ?>
                                        </div>
                                        <?php echo special($c2['level']) ?>
                                        <a href="../SA/delete-SAparty.php?SAparty_id=<?= special($SAparty_id) ?>&trainer_id2=<?= special($c2['ti2']) ?>"><button id="delete">削除</button></a>
                                    </div>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <?php foreach ($SA3 as $c3) { ?>
                            <?php if ($c3['t3'] != null) { ?>
                                <li class="party-wrap">
                                    <div class="party-detail CS-<?= special($c3['tn3']) ?>-detail" data-type="<?= special($c3['tn3']) ?>">
                                        <p>3</p>
                                        <div class="stars">
                                            <?php if ($c3['star3'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($c3['star3'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($c3['EX_Flg'] && $c3['EXable'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c3['t3']) ?>.png">
                                        <img class="party-detail-sync CS-<?php echo special($c3['tn3']) ?>-detail" src="../../sync/<?= special($c3['s3']) ?>.png">
                                        <div class="potential">
                                            <span>のびしろ：</span><?php echo special($c3['potential']) ?>/20
                                        </div>
                                        <div class="skill">
                                            <span>ポテンシャル：<br></span><?php echo special($c3['luckyskill_name']) ?>
                                        </div>
                                        <?php echo special($c3['level']) ?>
                                        <a href="../SA/delete-SAparty.php?SAparty_id=<?= special($SAparty_id) ?>&trainer_id3=<?= special($c3['ti3']) ?>"><button id="delete">削除</button></a>
                                    </div>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
            </ul>
        <?php } ?>
        </div>
    </main>
    <aside class="layer">
        <?php if ($memo['memo'] != null) { ?>
            <?php echo special($memo['memo']) ?>
        <?php } ?>
    </aside>
    <aside class="sidebar">
        <div>
            <form action="add-grids-info.php">
                <input type="URL" name="URL" autocomplete="off">
                <?php if (isset($_GET['LGparty_id'])) { ?>
                    <input type="hidden" name="LGparty_id" value="<?= special($LGparty_id) ?>">
                <?php } else if (isset($_GET['CSparty_id'])) { ?>
                    <input type="hidden" name="LGparty_id" value="<?= special($CSparty_id) ?>">
                <?php } else if (isset($_GET['SAparty_id'])) { ?>
                    <input type="hidden" name="LGparty_id" value="<?= special($SAparty_id) ?>">
                <?php } ?>
                <button>ボード登録</button>
            </form>
        </div>
        <?php if ($URL == null) { ?>
            <iframe src="https://ng-pomatools.web.app/team" class="pomatool-frame"></iframe>
        <?php } else if ($URL['URL'] == "") { ?>
            <iframe src="https://ng-pomatools.web.app/team" class="pomatool-frame"></iframe>
        <?php } else { ?>
            <iframe src="<?= special($URL['URL']) ?>" class="pomatool-frame"></iframe>
        <?php } ?>
    </aside>
</div>
<?php require_once('../General/footer.php') ?>