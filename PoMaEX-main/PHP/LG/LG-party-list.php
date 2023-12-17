<?php
require('../../function.php');
$LG_id = $_GET['LG_id'];
$p1 = get_LGParty1($LG_id);
$p2 = get_LGParty2($LG_id);
$p3 = get_LGParty3($LG_id);
$e1 = get_enemy1($LG_id);
$e2 = get_enemy2($LG_id);
$e3 = get_enemy3($LG_id);
$title = "PoMaEX | LG:Party-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2><?= LG ?></h2>
        <div class="LG-party">
            <ul class="LG-party-list">
                <?php foreach ($p1 as $party1) { ?>
                    <?php if ($party1['enemy_id'] == $e1['enemy_id1']) { ?>
                        <li class="party-wrap LG-party-wrap">
                            <div class="LG-enemy">
                                <div class="LG-party-img"><img src="/PoMaEX-main/レジェンドバトル/<?php echo special($e1['e1']) ?>.png" alt=""></div>
                                <a class="main-btn LG-party-btn" href="../General/party-detail.php?LGparty_id=<?= special($party1['LGparty_id']) ?>">編成詳細へ</a>
                            </div>
                            <div class="LG-party-wrap-trainers">
                                <?php if ($party1['t1'] != null) { ?>
                                    <div class="party-detail CS-<?= special($party1['tn1']) ?>-detail">
                                        <div class="stars">
                                            <?php if ($party1['ts1'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts1'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts1'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts1'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts1'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party1['f1'] && $party1['fa1'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party1['t1']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party1['s1']) ?>.png">
                                        <div class="level"><?php echo $party1['l1'] ?></div>
                                    </div>
                                <?php } ?>
                                <?php if ($party1['t2'] != null) { ?>
                                    <div class="party-detail">
                                        <div class="stars">
                                            <?php if ($party1['ts2'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts2'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts2'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts2'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts2'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party1['f1'] && $party1['fa1'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party1['t2']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party1['s2']) ?>.png">
                                        <div class="level"><?php echo $party1['l2'] ?></div>
                                    </div>
                                <?php } ?>
                                <?php if ($party1['t3'] != null) { ?>
                                    <div class="party-detail">
                                        <div class="stars">
                                            <?php if ($party1['ts3'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts3'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts3'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts3'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party1['ts3'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party1['f1'] && $party1['fa1'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party1['t3']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party1['s3']) ?>.png">
                                        <div class="level"><?php echo $party1['l3'] ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>

                <?php foreach ($p2 as $party2) { ?>
                    <?php if ($party2['enemy_id'] == $e2['enemy_id2']) { ?>
                        <li class="party-wrap LG-party-wrap">
                            <div class="LG-enemy">
                                <div class="LG-party-img"><img src="/PoMaEX-main/レジェンドバトル/<?php echo special($e2['e2']) ?>.png" alt=""></div>
                                <a class="main-btn LG-party-btn" href="../General/party-detail.php?LGparty_id=<?= special($party2['LGparty_id']) ?>">編成詳細へ</a>
                            </div>
                            <div class="LG-party-wrap-trainers">
                                <?php if ($party2['t1'] != null) { ?>
                                    <div class="party-detail CS-<?= special($party2['tn1']) ?>-detail">
                                        <div class="stars">
                                            <?php if ($party2['ts1'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts1'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts1'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts1'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts1'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party2['f2'] && $party2['fa2'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party2['t1']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party2['s1']) ?>.png">
                                        <div class="level"><?php echo $party2['l1'] ?></div>
                                    </div>
                                <?php } ?>
                                <?php if ($party2['t2'] != null) { ?>
                                    <div class="party-detail">
                                        <div class="stars">
                                            <?php if ($party2['ts2'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts2'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts2'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts2'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts2'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party2['f2'] && $party2['fa2'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party2['t2']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party2['s2']) ?>.png">
                                        <div class="level"><?php echo $party2['l2'] ?></div>
                                    </div>
                                <?php } ?>
                                <?php if ($party2['t3'] != null) { ?>
                                    <div class="party-detail">
                                        <div class="stars">
                                            <?php if ($party2['ts3'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts3'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts3'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts3'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party2['ts3'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party2['f2'] && $party2['fa2'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party2['t3']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party2['s3']) ?>.png">
                                        <div class="level"><?php echo $party2['l3'] ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>

                <?php foreach ($p3 as $party3) { ?>
                    <?php if ($party3['enemy_id'] == $e3['enemy_id3']) { ?>
                        <li class="party-wrap LG-party-wrap">
                            <div class="LG-enemy">
                                <div class="LG-party-img"><img src="/PoMaEX-main/レジェンドバトル/<?php echo special($e3['e3']) ?>.png" alt=""></div>
                                <a class="main-btn LG-party-btn" href="../General/party-detail.php?LGparty_id=<?= special($party3['LGparty_id']) ?>">編成詳細へ</a>
                            </div>
                            <div class="LG-party-wrap-trainers">
                                <?php if ($party3['t1'] != null) { ?>
                                    <div class="party-detail CS-<?= special($party3['tn1']) ?>-detail">
                                        <div class="stars">
                                            <?php if ($party3['ts1'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts1'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts1'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts1'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts1'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party3['f3'] && $party3['fa3'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party3['t1']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party3['s1']) ?>.png">
                                        <div class="level"><?php echo $party3['l1'] ?></div>
                                    </div>
                                <?php } ?>
                                <?php if ($party3['t2'] != null) { ?>
                                    <div class="party-detail">
                                        <div class="stars">
                                            <?php if ($party3['ts2'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts2'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts2'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts2'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts2'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party3['f3'] && $party3['fa3'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party3['t2']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party3['s2']) ?>.png">
                                        <div class="level"><?php echo $party3['l2'] ?></div>
                                    </div>
                                <?php } ?>
                                <?php if ($party3['t3'] != null) { ?>
                                    <div class="party-detail">
                                        <div class="stars">
                                            <?php if ($party3['ts3'] == 1) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts3'] == 2) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts3'] == 3) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts3'] == 4) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/non_star.png">
                                            <?php } else if ($party3['ts3'] == 5) { ?>
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                                <img src="../../img/General/star.png">
                                            <?php } ?>
                                        </div>
                                        <div class="EX">
                                            <?php if ($party3['f3'] && $party3['fa3'] == true) { ?>
                                                <img src="../../img/General/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/General/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($party3['t3']) ?>.png">
                                        <img class="party-detail-sync" src="../../sync/<?= special($party3['s3']) ?>.png">
                                        <div class="level"><?php echo $party3['l3'] ?></div>
                                    </div>
                                <?php } ?>
                            </div>
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