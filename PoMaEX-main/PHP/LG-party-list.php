<?php
require('../function.php');
$category_id = $_GET['category_id'];
$eventnumber = $_GET['eventnumber'];
$parties = get_LGParty($category_id, $eventnumber);
$e1 = get_enemy1($eventnumber);
$e2 = get_enemy2($eventnumber);
$e3 = get_enemy3($eventnumber);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG:Party-List</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../CSS/LG-party-list.css">
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
                    <li id="list4"><a href="../PHP/LG-party-list.php">乱数編成生成</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="content">
                <h2><?= LG ?></h2>
                <ul>
                    <div class="enemy">
                        <li><a href="search.php?enemy_id=<?= special($e1['enemy_id']) ?>"><button><?php echo special($e1['e1']) ?></button></a></li>
                        <li><a href="search.php?enemy_id=<?= special($e2['enemy_id']) ?>"><button><?php echo special($e2['e2']) ?></button></a></li>
                        <li><a href="search.php?enemy_id=<?= special($e3['enemy_id']) ?>"><button><?php echo special($e3['e3']) ?></button></a></li>
                    </div>
                    <div class="trainer">
                        <?php foreach ($parties as $party) { ?>
                            <?php if ($party['eventnumber'] == $eventnumber && $party['trainer_id1'] && $party['trainer_id2'] && $party['trainer_id3'] != null) { ?>
                                <?php if ($party['enemy_id'] == $e1['enemy_id']) { ?>
                                    <li>
                                        <a href="party-detail.php?party_id=<?= special($party['party_id']) ?>">編成詳細へ</a>
                                        <img src="../trainer/<?= special($party['trainer_name']) ?>.png">
                                    </li>
                                <?php } ?>
                                <?php if ($party['enemy_id'] == $e2['enemy_id']) { ?>
                                    <li>
                                        <a href="party-detail.php?party_id=<?= special($party['party_id']) ?>">編成詳細へ</a>
                                        <img src="../trainer/<?= special($party['trainer_name']) ?>.png">
                                    </li>
                                <?php } ?>
                                <?php if ($party['enemy_id'] == $e3['enemy_id']) { ?>
                                    <li>
                                        <a href="party-detail.php?party_id=<?= special($party['party_id']) ?>">編成詳細へ</a>
                                        <img src="../trainer/<?= special($party['trainer_name']) ?>.png">
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </ul>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/LG-party-list.js"></script>
</body>

</html>