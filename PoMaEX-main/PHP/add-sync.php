<?php
require('../function.php');
$lucky_skill = get_lucky_skill();
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
            <form action="add-sync.php">
                <input type="text">
                <input type="number" name="potential" id="potential" min="0" max="20">
                <select name="lucky_skills" id="lucky_skills">
                    <?php foreach ($lucky_skill as $skill) { ?>
                        <option value="<?= special($skill['lucky_skill_id']) ?>"><?= special($skill['lucky_skill_name']) ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="URL" id="URL">
                <input type="submit" value="登録">
            </form>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/add-sync.js"></script>
</body>

</html>