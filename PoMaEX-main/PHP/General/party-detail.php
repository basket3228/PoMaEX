<?php
require('../../function.php');

$category_id = $_GET['category_id'];
if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
    if ($category_id == 1) {
        $LG1 = LG1($LGparty_id);
        $LG2 = LG2($LGparty_id);
        $LG3 = LG3($LGparty_id);
    }
} else {
    if (isset($_GET['CSparty_id'])) {
        $CSparty_id = $_GET['CSparty_id'];
        if ($category_id == 2) {
            $CS1 = CS1($CSparty_id);
            $CS2 = CS2($CSparty_id);
            $CS3 = CS3($CSparty_id);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party-Detail</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../../CSS/General/party-detail.css">
</head>

<body>
    <div class="container">
        <header id="header">
            <h1 class="h1"><a href="../../HTML/index.html"><img src="../../img/logo.png"></a></h1>
            <nav>
                <ul id="nav-list">
                    <li id="list1"><a href="../General/party-list.php">編成一覧</a></li>
                    <li id="list2"><a href="../General/trainer-list.php">バディーズ一覧</a></li>
                    <li id="list3"><a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a></li>
                    <li id="list4"><a href="../General/create-random-party.php">乱数編成生成</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <div class="trainer">
                <h2>パーティ詳細</h2>
                <ul>
                    <?php if ($category_id == 1) { ?>
                        <?php foreach ($LG1 as $c1) { ?>
                            <?php if ($LGparty_id == $c1['LGparty_id']) { ?>
                                <?php if ($c1['t1'] != null) { ?>
                                    <li>
                                        <p>1</p>
                                        <div class="EX">
                                            <?php if ($c1['EX_Flg'] == true) { ?>
                                                <img src="../../img/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c1['t1']) ?>.png">
                                        <img src="../../sync/<?= special($c1['s1']) ?>.png">
                                        <div class="potential">
                                            <?php echo special($c1['potential']) ?>
                                        </div>
                                        <div class="skill">
                                            <?php echo special($c1['luckyskill_name']) ?>
                                        </div>
                                        <a href="<?php echo special($c1['URL1']) ?>"><button>ボード情報</button></a>
                                        <a href="delete.php">削除</a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($LG2 as $c2) { ?>
                                <?php if ($c2['t2'] != null) { ?>
                                    <li>2 <br>
                                        <?php if ($c2['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                        <img src="../../trainer/<?= special($c2['t2']) ?>.png">
                                        <img src="../../sync/<?= special($c2['s2']) ?>.png">
                                        <?php echo special($c2['potential']) ?><br>
                                        <?php echo special($c2['luckyskill_name']) ?><br>
                                        <a href="<?php echo special($c2['URL2']) ?>"><button>ボード情報</button></a>
                                        <a href="../CLUD/delete-party.php?LGparty_id=<?= $c2['LGparty_id'] ?>&trainer_id=<?= special($c2['ti2']) ?>&category_id=<?= $category_id ?>"><button id="delete">Delete</button></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($LG3 as $c3) { ?>
                                <?php if ($c3['t3'] != null) { ?>
                                    <li>3 <br>
                                        <?php if ($c3['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                        <img src="../../trainer/<?= special($c3['t3']) ?>.png">
                                        <img src="../../sync/<?= special($c3['s3']) ?>.png">
                                        <?php echo special($c3['potential']) ?><br>
                                        <?php echo special($c3['luckyskill_name']) ?><br>
                                        <a href="<?php echo special($c3['URL3']) ?>"><button>ボード情報</button></a>
                                        <a href="../CLUD/delete-party.php?LGparty_id=<?= $c3['LGparty_id'] ?>&trainer_id=<?= special($c3['ti3']) ?>&category_id=<?= $category_id ?>"><button id="delete">Delete</button></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } else if ($category_id == 2) { ?>
                        <?php foreach ($CS1 as $c1) { ?>
                            <?php if ($CSparty_id == $c1['CSparty_id']) { ?>
                                <?php if ($c1['t1'] != null) { ?>
                                    <li>
                                        <p>1</p>
                                        <div class="EX">
                                            <?php if ($c1['EX_Flg'] == true) { ?>
                                                <img src="../../img/EX.png">
                                            <?php } else { ?>
                                                <img src="../../img/NotEX.png">
                                            <?php } ?>
                                        </div>
                                        <img src="../../trainer/<?= special($c1['t1']) ?>.png">
                                        <img src="../../sync/<?= special($c1['s1']) ?>.png">
                                        <div class="potential">
                                            <?php echo special($c1['potential']) ?>
                                        </div>
                                        <div class="skill">
                                            <?php echo special($c1['luckyskill_name']) ?>
                                        </div>
                                        <a href="<?php echo special($c1['URL1']) ?>"><button>ボード情報</button></a>
                                        <a href="../CLUD/delete-party.php?CSparty_id=<?= $c1['CSparty_id'] ?>&trainer_id=<?= special($c1['ti1']) ?>&category_id=<?= $category_id ?>" <button id="delete">Delete</a></button>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($CS2 as $c2) { ?>
                                <?php if ($c2['t2'] != null) { ?>
                                    <li>2 <br>
                                        <?php if ($c2['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                        <img src="../../trainer/<?= special($c2['t2']) ?>.png">
                                        <img src="../../sync/<?= special($c2['s2']) ?>.png">
                                        <?php echo special($c2['potential']) ?><br>
                                        <?php echo special($c2['luckyskill_name']) ?><br>
                                        <a href="<?php echo special($c2['URL2']) ?>"><button>ボード情報</button></a>
                                        <a href="../CLUD/delete-party.php?CSparty_id=<?= $c2['CSparty_id'] ?>&trainer_id=<?= special($c2['ti2']) ?>&category_id=<?= $category_id ?>" <button id="delete">Delete</a></button>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                            <?php foreach ($CS3 as $c3) { ?>
                                <?php if ($c3['t3'] != null) { ?>
                                    <li>3 <br>
                                        <?php if ($c3['EX_Flg'] == true) { ?>
                                            <img src="../../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../../img/NotEX.png">
                                        <?php } ?>
                                        <img src="../../trainer/<?= special($c3['t3']) ?>.png">
                                        <img src="../../sync/<?= special($c3['s3']) ?>.png">
                                        <?php echo special($c3['potential']) ?><br>
                                        <?php echo special($c3['luckyskill_name']) ?><br>
                                        <a href="<?php echo special($c3['URL3']) ?>"><button>ボード情報</button></a>
                                        <a href="../CLUD/delete-party.php?CSparty_id=<?= $c3['CSparty_id'] ?>&trainer_id=<?= special($c3['ti3']) ?>&category_id=<?= $category_id ?>" <button id="delete">Delete</a></button>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                </ul>
            <?php } ?>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../../JS/party-detail.js"></script>
</body>

</html>