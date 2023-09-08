<?php
require('../../function.php');
$enemies = get_enemy();
$category_id = $_GET['category_id'];
$categories = get_category();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-LG</title>
    <link rel="icon" href="../../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../../CSS/LG/add-LG.css">
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
                <form action="add-LG-post.php?>" autocomplete="off" method="get">
                    <label for="name">名前</label>
                    <input type="text" name="name" id="name">
                    <label for="eventnumber">第何回</label>
                    <input type="number" min="10" name="eventnumber" id="eventnumber">
                    <select name="enemy1" id="enemy1">
                        <option value="">--選択してください--</option>
                        <?php foreach ($enemies as $enemy) { ?>
                            <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                        <?php } ?>
                    </select>
                    <select name="enemy2" id="enemy2">
                        <option value="">--選択してください--</option>
                        <?php foreach ($enemies as $enemy) { ?>
                            <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                        <?php } ?>
                    </select>
                    <select name="enemy3" id="enemy3">
                        <option value="">--選択してください--</option>
                        <?php foreach ($enemies as $enemy) { ?>
                            <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                        <?php } ?>
                    </select>
                    <input type="hidden" value="1" name="category_id">
                    <input type="submit" value="登録">
                </form>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/LG/add-LG.js"></script>
</body>

</html>