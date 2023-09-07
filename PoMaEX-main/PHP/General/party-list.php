<?php
require('../../function.php');
$categories = get_category();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party-List</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../../CSS/General/party-list.css">
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
                <?php foreach ($categories as $category) { ?>
                    <?php if ($category['category_name'] == 'レジェンドアドベンチャー') { ?>
                        <a href="../LG/LGList.php?category_id=<?= special($category['category_id']) ?>"><?= special($category['category_name']) ?>
                            <img src="../../img/LG.png"></a>
                    <?php } else if ($category['category_name'] == 'チャンピオンバトル') { ?>
                        <a href="../CS/CS-type-list.php?category_id=<?= special($category['category_id']) ?>"><?= special($category['category_name']) ?>
                            <img src="../../img/CS.png"></a>
                    <?php } else { ?>
                        <a href="../General/others.php?category_id=<?= special($category['category_id']) ?>"><?= special($category['category_name']) ?>
                            <img src="../../img/others.png"></a>
                    <?php } ?>
                <?php } ?>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../../JS/General/party-list.js"></script>
</body>

</html>