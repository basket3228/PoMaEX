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
        <a href="add-LGparty.php?LG_id=<?= special($e1['LG_id']) ?>&enemy_id1=<?= special($e1['enemy_id1']) ?>&enemy_id2=<?= special($e2['enemy_id2']) ?>&enemy_id3=<?= special($e3['enemy_id3']) ?>"><button>追加</button></a>
        <ul class="party-list">
            <li class="enemy">
                <h2><a href="LGsearch.php?enemy_id=<?= special($e1['enemy_id1']) ?>&LG_id=<?= special($e1['LG_id']) ?>"><button><?php echo special($e1['e1']) ?></button></a></h2>
                <ul class="party">
                    <?php foreach ($p1 as $party1) { ?>
                        <?php if ($party1['enemy_id'] == $e1['enemy_id1']) { ?>
                            <li>
                                <a href="../General/party-detail.php?LGparty_id=<?= special($party1['LGparty_id']) ?>">編成詳細へ</a>
                                <?php if ($party1['t1'] != null) { ?>
stars                                    <?php if ($party1['ts1'] == 1) { ?>
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
EX                                    
                                        <?php if ($party1['f1'] && $party1['fa1'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party1['t1']) ?>.png">
                                    <img src="../../sync/<?= special($party1['s1']) ?>.png">
                                    <p><?php echo $party1['l1'] ?></p>
                                <?php } ?>
                                <?php if ($party1['t2'] != null) { ?>
                                    <?php if ($party1['ts2'] == 1) { ?>
                                        <img src="../../img/General/star.png">
                                        <img src="../../img/General/non_star.png">
                                        <img src="../../img/General/non_star.png">
                                        <img src="../../img/General/non_star.png">
                                        <img src="../../img/General/non_star.png">
stars                                    <?php } else if ($party1['ts2'] == 2) { ?>
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
EX                                    
                                        <?php if ($party1['f1'] && $party1['fa1'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party1['t2']) ?>.png">
                                    <img src="../../sync/<?= special($party1['s2']) ?>.png">
                                    <p><?php echo $party1['l2'] ?></p>
                                <?php } ?>
                                <?php if ($party1['t3'] != null) { ?>
stars                                    <?php if ($party1['ts3'] == 1) { ?>
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
EX                                    
                                        <?php if ($party1['f1'] && $party1['fa1'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party1['t3']) ?>.png">
                                    <img src="../../sync/<?= special($party1['s3']) ?>.png">
                                    <p><?php echo $party1['l3'] ?></p>
                                <?php } ?>
                                <a href="delete-LG-list.php?LGparty_id=<?= special($party1['LGparty_id']) ?>&LG_id=<?= special($LG_id) ?>"><button class="delete">削除</button></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li class="enemy">
                <h2><a href="LGsearch.php?enemy_id=<?= special($e2['enemy_id2']) ?>&LG_id=<?= special($e1['LG_id']) ?>"><button><?php echo special($e2['e2']) ?></button></a></h2>
                <ul class="party">
                    <?php foreach ($p2 as $party2) { ?>
                        <?php if ($party2['enemy_id'] == $e2['enemy_id2']) { ?>
                            <li>
                                <a href="../General/party-detail.php?LGparty_id=<?= special($party2['LGparty_id']) ?>">編成詳細へ</a>
                                <?php if ($party2['t1'] != null) { ?>
stars                                    <?php if ($party2['ts1'] == 1) { ?>
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
EX
                                    <?php if ($party2['f2'] && $party2['fa2'] == true) { ?>
                                        <img src="../../img/General/EX.png">
                                    <?php } else { ?>
                                        <img src="../../img/General/NotEX.png">
                                    <?php } ?>

                                    <img src="../../trainer/<?= special($party2['t1']) ?>.png">
                                    <img src="../../sync/<?= special($party2['s1']) ?>.png">
                                    <p><?php echo $party2['l1'] ?></p>
                                <?php } ?>
                                <?php if ($party2['t2'] != null) { ?>
                                    <?php if ($party2['ts2'] == 1) { ?>
 stars                                       <img src="../../img/General/star.png">
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
EX                                    
                                        <?php if ($party2['f2'] && $party2['fa2'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party2['t2']) ?>.png">
                                    <img src="../../sync/<?= special($party2['s2']) ?>.png">
                                    <p><?php echo $party2['l2'] ?></p>
                                <?php } ?>
                                <?php if ($party2['t3'] != null) { ?>
                                    <?php if ($party2['ts3'] == 1) { ?>
star                                        <img src="../../img/General/star.png">
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
EX                                    
                                        <?php if ($party2['f2'] && $party2['fa2'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party2['t3']) ?>.png">
                                    <img src="../../sync/<?= special($party2['s3']) ?>.png">
                                    <p><?php echo $party2['l3'] ?></p>
                                <?php } ?>
                                <a href="delete-LG-list.php?LGparty_id=<?= $party2['LGparty_id'] ?>&LG_id=<?= special($LG_id) ?>"><button class="delete">削除</button></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li class="enemy">
                <h2><a href="LGsearch.php?enemy_id=<?= special($e3['enemy_id3']) ?>&LG_id=<?= special($LG_id) ?>"><button><?php echo special($e3['e3']) ?></button></a></h2>
                <ul class="party">
                    <?php foreach ($p3 as $party3) { ?>
                        <?php if ($party3['enemy_id'] == $e3['enemy_id3']) { ?>
                            <li>
                                <a href="../General/party-detail.php?LGparty_id=<?= special($party3['LGparty_id']) ?>">編成詳細へ</a>
                                <?php if ($party3['t1'] != null) { ?>
                                    <?php if ($party3['ts1'] == 1) { ?>
stars                                        <img src="../../img/General/star.png">
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
EX                                    
                                        <?php if ($party3['f3'] && $party3['fa3'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party3['t1']) ?>.png">
                                    <img src="../../sync/<?= special($party3['s1']) ?>.png">
                                    <p><?php echo $party3['l1'] ?></p>
                                <?php } ?>
                                <?php if ($party3['t2'] != null) { ?>
                                    <?php if ($party3['ts2'] == 1) { ?>
stars                                        <img src="../../img/General/star.png">
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
EX                                    
                                        <?php if ($party3['f3'] && $party3['fa3'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party3['t2']) ?>.png">
                                    <img src="../../sync/<?= special($party3['s2']) ?>.png">
                                    <p><?php echo $party3['l2'] ?></p>
                                <?php } ?>
                                <?php if ($party3['t3'] != null) { ?>
                                    <?php if ($party3['ts3'] == 1) { ?>
stars                                        <img src="../../img/General/star.png">
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
EX                                    
                                        <?php if ($party3['f3'] && $party3['fa3'] == true) { ?>
                                            <img src="../../img/General/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/General/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../../trainer/<?= special($party3['t3']) ?>.png">
                                    <img src="../../sync/<?= special($party3['s3']) ?>.png">
                                    <p><?php echo $party3['l3'] ?></p>
                                <?php } ?>
                                <a href="delete-LG-list.php?LGparty_id=<?= special($party3['LGparty_id']) ?>&LG_id=<?= special($LG_id) ?>"><button class="delete">削除</button></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>