<?php
require('../function.php');

$party_id = $_GET['party_id'];
$charcter1 = charcter1($party_id);
$charcter2 = charcter2($party_id);
$charcter3 = charcter3($party_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party-Detail</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../CSS/party-detail.css">
</head>

<body>
    <div class="container">
        <header id="header">
            <h1 class="h1"><a href="../HTML/index.html"><img src="../img/logo.png"></a></h1>
            <nav>
                <ul id="nav-list">
                    <li id="list1"><a href="../PHP/party-list.php">編成一覧</a></li>
                    <li id="list2"><a href="../PHP/trainer-list.php">バディーズ一覧</a></li>
                    <li id="list3"><a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a></li>
                    <li id="list4"><a href="../PHP/create-random-party.php">乱数編成生成</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <div class="trainer">
                <h2>パーティ詳細</h2>
                <?php foreach ($charcter1 as $c1) { ?>
                    <?php if ($party_id == $c1['party_id']) { ?>
                        <ul>
                            <?php if ($c1['t1'] != null) { ?>
                                <li>
                                    <p>1</p>
                                    <div class="EX">
                                        <?php if ($c1['EX_flg'] == true) { ?>
                                            <img src="../img/EX.png">
                                        <?php } else { ?>
                                            <img src="../img/NotEX.png">
                                        <?php } ?>
                                    </div>
                                    <img src="../trainer/<?= special($c1['t1']) ?>.png">
                                    <img src="../sync/<?= special($c1['s1']) ?>.png">
                                    <div class="potential">
                                        <?php echo special($c1['potential']) ?>
                                    </div>
                                    <div class="skill">
                                        <?php echo special($c1['lucky_skill_name']) ?>
                                    </div>
                                    <a href="<?php echo special($c1['PoMaTool_URL']) ?>"><button>ボード情報</button></a>
                                    <button id="delete"><a href="delete-party.php?party_id=<?= $c1['party_id'] ?>&trainer_id=<?= special($c1['ti1']) ?>">Delete</a></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <?php foreach ($charcter2 as $c2) { ?>
                            <?php if ($c2['t2'] != null) { ?>
                                <li>2 <br>
                                    <?php if ($c2['EX_flg'] == true) { ?>
                                        <img src="../img/EX.png">
                                    <?php } else { ?>
                                        <img src="../img/NotEX.png">
                                    <?php } ?>
                                    <img src="../trainer/<?= special($c2['t2']) ?>.png">
                                    <img src="../sync/<?= special($c2['s2']) ?>.png">
                                    <?php echo special($c2['potential']) ?><br>
                                    <?php echo special($c2['lucky_skill_name']) ?><br>
                                    <a href="<?php echo special($c2['PoMaTool_URL']) ?>"><button>ボード情報</button></a>
                                    <button id="delete"><a href="delete-party.php?party_id=<?= $c2['party_id'] ?>&trainer_id=<?= special($c2['ti2']) ?>">Delete</a></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <?php foreach ($charcter3 as $c3) { ?>
                            <?php if ($c3['t3'] != null) { ?>
                                <li>3 <br>
                                    <?php if ($c3['EX_flg'] == true) { ?>
                                        <img src="../img/EX.png">
                                    <?php } else { ?>
                                        <img src="../img/NotEX.png">
                                    <?php } ?>
                                    <img src="../trainer/<?= special($c3['t3']) ?>.png">
                                    <img src="../sync/<?= special($c3['s3']) ?>.png">
                                    <?php echo special($c3['potential']) ?><br>
                                    <?php echo special($c3['lucky_skill_name']) ?><br>
                                    <a href="<?php echo special($c3['PoMaTool_URL']) ?>"><button>ボード情報</button></a>
                                    <button id="delete"><a href="delete-party.php?party_id=<?= $c3['party_id'] ?>&trainer_id=<?= special($c3['ti3']) ?>">Delete</a></button>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        </ul>
                    <?php } ?>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/party-detail.js"></script>
</body>

</html>