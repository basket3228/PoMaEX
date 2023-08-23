<?php
require('../function.php');
$category_id = $_GET['category_id'];
$eventnumber = $_GET['eventnumber'];
$parties = get_LGParty($category_id, $eventnumber);

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
                    <li id="liat2"><a href="../PHP/trainer-list.php">バディーズ一覧</a></li>
                    <li id="list3"><a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a></li>
                    <li id="list4"><a href="../PHP/create-random-party.php">乱数編成生成</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="content">
                <button id="btn"></button>
                <ul>
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['eventnumber'] == $eventnumber) { ?>
                            <li>
                                <?php special($party['e1']) ?>
                                <a href="party-detail.php?party_id=<?= special($party['party_id']) ?>">編成詳細へ</a>
                                <img src="../pokemas/<?= special($party['trainer_name']) ?>.png">
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>

</body>

</html>