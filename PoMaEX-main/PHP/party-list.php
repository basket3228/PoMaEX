<?php
require('../function.php');
$parties = get_partyList();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party-list</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../CSS/party-list.css">
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
            <div class="content">
                <h2>編成一覧</h2>
                <ul>
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['category_id'] == 1) { ?>
                            <li>
                                <p><?php echo special($party['name']) ?></p>
                                <a href="LG-party-list.php?category_id=<?= special($party['category_id']) ?>&eventnumber=<?= special($party['eventnumber']) ?>">
                                    <?= special($party['category_name']) ?></a>
                                <img src="../img/LG<?= $party['eventnumber'] ?>.png">
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['category_id'] == 2) { ?>
                            <li>
                                <a href="../PHP/CS-type-list.php?category_id=<?= special($party['category_id']) ?>">
                                    <?= special($party['category_name']) ?></a>
                                <img src="../img/CS.png">
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="party-list.js"></script>
</body>

</html>