<?php
require('../function.php');
$lucky_skill = get_lucky_skill();
$enemies = get_enemy();
$trainers = get_trainer();
// $party_id = $_GET['party_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Sync</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../CSS/add-sync.css">
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
        <main>
            <div class="content">
                <form action="add-sync-post.php">
                    <div class="content1">
                        <label for="trainer-list">バディーズ</label>
                        <button id="trainer-btn">バディーズ選択</button>
                        <ul id="trainer-list" hidden>
                            <?php foreach ($trainers as $trainer) { ?>
                                <li><img src="../trainer/<?= special($trainer['trainer_name']) ?>.png">
                                    <img src="../sync/<?= special($trainer['sync_name']) ?>.png">
                                </li>
                            <?php } ?>
                        </ul>
                        <select name="lucky_skill1" id="lucky_skill">
                            <?php foreach ($lucky_skill as $skill) { ?>
                                <option value="<?= special($skill['lucky_skill_id']) ?>"><?= special($skill['lucky_skill_name']) ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="URL1" id="URL">
                    </div>
                    <div class="content2">
                        <label for="trainer-list">バディーズ</label>
                        <button id="trainer-btn">バディーズ選択</button>
                        <ul id="trainer-list" hidden>
                            <?php foreach ($trainers as $trainer) { ?>
                                <li><img src="../trainer/<?= special($trainer['trainer_name']) ?>.png">
                                    <img src="../sync/<?= special($trainer['sync_name']) ?>.png">
                                </li>
                            <?php } ?>
                        </ul>
                        <select name="lucky_skill2" id="lucky_skill">
                            <?php foreach ($lucky_skill as $skill) { ?>
                                <option value="<?= special($skill['lucky_skill_id']) ?>"><?= special($skill['lucky_skill_name']) ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="URL2" id="URL">
                    </div>
                    <div class="content3">
                        <label for="trainer-list">バディーズ</label>
                        <button id="trainer-btn">バディーズ選択</button>
                        <ul id="trainer-list" hidden>
                            <?php foreach ($trainers as $trainer) { ?>
                                <li><img src="../trainer/<?= special($trainer['trainer_name']) ?>.png">
                                    <img src="../sync/<?= special($trainer['sync_name']) ?>.png">
                                </li>
                            <?php } ?>
                        </ul>
                        <select name="lucky_skill3" id="lucky_skill">
                            <?php foreach ($lucky_skill as $skill) { ?>
                                <option value="<?= special($skill['lucky_skill_id']) ?>"><?= special($skill['lucky_skill_name']) ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="URL3" id="URL">
                        <input type="submit" value="登録">
                    </div>
                    <input type="text" value="<?= special($party_id) ?>">
                    <select name="enemy_id" id="enemy_id">
                        <?php foreach ($enemies as $enemy) { ?>
                            <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                        <?php } ?>
                        <input type="number" min="1" max="13" name="enemy_id">
                    </select>
                </form>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/add-sync.js"></script>
</body>

</html>