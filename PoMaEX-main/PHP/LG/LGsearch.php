<?php
require('../../function.php');
$category_id = $_GET['category_id'];
$LG_id = $_GET['LG_id'];
$enemy_id = $_GET['enemy_id'];
$parties = get_party($LG_id, $enemy_id);
$enemy = get_particular_enemy($enemy_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LG:Party-List</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../../CSS/LG/LGsearch.css">
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
                <!-- ↓文字を大きく画面中央に -->
                <h2><?php echo special($enemy['enemy_name']) ?></h2>
                <ul>
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['t2'] != null) { ?>
                            <li>
                                <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= $category_id ?>">編成詳細へ</a>
                                <!-- ↓トレーナーを横並びに、かつ一人一人離して -->
                                <img src="../../trainer/<?= special($party['t1']) ?>.png">
                                <img src="../../trainer/<?= special($party['t2']) ?>.png">
                                <img src="../../trainer/<?= special($party['t3']) ?>.png">
                            </li>
                            <a href="delete-LG-list.php?LGparty_id=<?= $party['LGparty_id'] ?>&LG_id=<?= $LG_id ?>&category_id=<?= $category_id ?>"><button class="delete">削除</button></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/LG/LG-party-list.js"></script>
</body>

</html>