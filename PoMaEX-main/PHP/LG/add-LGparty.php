<?php
require('../../function.php');

$category_id = $_GET['category_id'];
$LG_id = $_GET['LG_id'];
$trainers = get_trainer();
$luckyskills = get_luckyskill();

?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add-LG-Party</title>
<link rel="icon" href="../../img/logo.ico" />
<link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="../../CSS/LG/add-LG-party.css">
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
                <form action="add-LGparty-post.php">
                    <ul>
                        <li>
                            <div class="content1">
                                <input type="hidden" name="category_id" value="<?= $category_id ?>">
                                <input type="hidden" name="LG_id" value="<?= $LG_id ?>">
                                <label for="trainer1">トレーナー1</label>
                                <select name="trainer1" id="trainer1">
                                    <option value="">--選択してください--</option>
                                    <?php foreach ($trainers as $trainer) { ?>
                                        <option value="<?= special($trainer['trainer_id']) ?>"><?= special($trainer['trainer_name']) ?></option>
                                    <?php } ?>
                                </select>
                                <label for="luckyskill1">ポテンシャル</label>
                                <select name="luckyskill1" id="luckyskill1">
                                    <option value="">--選択してください--</option>
                                    <?php foreach ($luckyskills as $luckyskill) { ?>
                                        <option value="<?= special($luckyskill['luckyskill_id']) ?>"><?= special($luckyskill['luckyskill_name']) ?></option>
                                    <?php } ?>
                                </select>
                                <label for="URL1">PoMaTool_URL</label>
                                <input type="url" name="URL1" id="URL1">
                            </div>
                        </li>
                        <li>
                            <div class="content2">
                                <label for="trainer2">トレーナー2</label>
                                <select name="trainer2" id="trainer2">
                                    <option value="">--選択してください--</option>
                                    <?php foreach ($trainers as $trainer) { ?>
                                        <option value="<?= special($trainer['trainer_id']) ?>"><?= special($trainer['trainer_name']) ?></option>
                                    <?php } ?>
                                </select>
                                <label for="luckyskill2">ポテンシャル</label>
                                <select name="luckyskill2" id="luckyskill2">
                                    <option value="">--選択してください--</option>
                                    <?php foreach ($luckyskills as $luckyskill) { ?>
                                        <option value="<?= special($luckyskill['luckyskill_id']) ?>"><?= special($luckyskill['luckyskill_name']) ?></option>
                                    <?php } ?>
                                </select>
                                <label for="URL2">PoMaTool_URL</label>
                                <input type="url" name="URL2" id="URL2">
                            </div>
                        </li>
                        <li>
                            <div class="content3">
                                <label for="trainer3">トレーナー3</label>
                                <select name="trainer3" id="trainer3">
                                    <option value="">--選択してください--</option>
                                    <?php foreach ($trainers as $trainer) { ?>
                                        <option value="<?= special($trainer['trainer_id']) ?>"><?= special($trainer['trainer_name']) ?></option>
                                    <?php } ?>
                                </select>
                                <label for="luckyskill3">ポテンシャル</label>
                                <select name="luckyskill3" id="luckyskill3">
                                    <option value="">--選択してください--</option>
                                    <?php foreach ($luckyskills as $luckyskill) { ?>
                                        <option value="<?= special($luckyskill['luckyskill_id']) ?>"><?= special($luckyskill['luckyskill_name']) ?></option>
                                    <?php } ?>
                                </select>
                                <label for="URL3">PoMaTool_URL</label>
                                <input type="url" name="URL3" id="URL3">
                            </div>
                        <li>
                            <div class="content4">
                                <select name="" id=""></select>
                                <!-- 選べる敵を限定できるように調整 -->
                                <input type="submit" value="追加">
                            </div>
                        </li>
                        </li>
                    </ul>
                </form>
            </div>
        </main>
    </div>
</body>

</html>