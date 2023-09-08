<?php
require('../../function.php');
$parties = get_LGpartyList();
$category_id = $_GET['category_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGList</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../../CSS/LG/LGList.css">
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
            <div class="content">
                <h2>編成一覧</h2>
                <a href="add-LG.php?category_id=<?= $category_id ?>"><button id="btn">追加</button></a>
                <ul>
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($category_id == 1) { ?>
                            <li>
                                <a href="LG-party-list.php?LG_id=<?= special($party['LG_id']) ?>&category_id=<?= $category_id ?>">
                                    <?= special($party['name']) ?></a>
                                <img src="../../img/LG<?= $party['eventnumber'] ?>.png">
                                <a href="delete-LG.php?LG_id=<?= special($party['LG_id']) ?>&category_id=<?= $category_id ?>"><button id="btn">削除</button></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../../CSS/LG/LGList.css"></script>
</body>

</html>