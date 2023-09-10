<?php
require('../../function.php');
$category_id = $_GET['category_id'];
$LG_id = $_GET['LG_id'];
$parties = get_LGParty($LG_id);
$e1 = get_enemy1($LG_id);
$e2 = get_enemy2($LG_id);
$e3 = get_enemy3($LG_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG:Party-List</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../../CSS/LG/LG-party-list.css">
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

        <main>
            <div class="content">
                <h2><?= LG ?></h2>
                <a href="add-LGparty.php?LG_id=<?= special($e1['LG_id']) ?>&category_id=<?= $category_id ?>&enemy_id1=<?= special($e1['enemy_id1']) ?>&enemy_id2=<?= special($e2['enemy_id2']) ?>&enemy_id3=<?= special($e3['enemy_id3']) ?>"><button>追加</button></a>
                <ul class="party-list">
                    <li class="enemy">
                        <h2><a href="search.php?enemy_id=<?= special($e1['enemy_id1']) ?>"><button><?php echo special($e1['e1']) ?></button></a></h2>
                        <ul class="party">
                            <?php foreach ($parties as $party) { ?>
                                <?php if ($party['trainer_name'] != null) { ?>
                                    <?php if ($party['enemy_id'] == $e1['enemy_id1']) { ?>
                                        <li>
                                            <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= $category_id ?>">編成詳細へ</a>
                                            <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="enemy">
                        <h2><a href="search.php?enemy_id=<?= special($e2['enemy_id2']) ?>"><button><?php echo special($e2['e2']) ?></button></a></h2>
                        <ul class="party">
                            <?php foreach ($parties as $party) { ?>
                                <?php if ($party['trainer_name'] != null) { ?>
                                    <?php if ($party['enemy_id'] == $e2['enemy_id2']) { ?>
                                        <li>
                                            <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= $category_id ?>">編成詳細へ</a>
                                            <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="enemy">
                        <h2><a href="search.php?enemy_id=<?= special($e3['enemy_id3']) ?>"><button><?php echo special($e3['e3']) ?></button></a></h2>
                        <ul class="party">
                            <?php foreach ($parties as $party) { ?>
                                <?php if ($party['trainer_name'] != null) { ?>
                                    <?php if ($party['enemy_id'] == $e3['enemy_id3']) { ?>
                                        <li>
                                            <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= $category_id ?>">編成詳細へ</a>
                                            <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/LG/LG-party-list.js"></script>
</body>

</html>