<?php
require('../function.php');

$trainer1 = get_attacker();
$trainer2 = get_technical();
$trainer3 = get_support();
$attacker = $trainer1[array_rand($trainer1)];
$technical = $trainer2[array_rand($trainer2)];
$support = $trainer3[array_rand($trainer3)];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Random-Party</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../CSS/create-random-party.css">
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
                <h2>ランダム編成生成</h2>
                <ul>
                    <!-- 選びなおすボタンでそれぞれで再度乱数生成をする(JSで操作)
                    初期表示はロール被りなし、主人公被りは二枠までという条件で表示(主人公二枠なら残りは必ずEXキャラ) -->
                    <li><img src="../trainer/<?= special($attacker['trainer_name']) ?>.png">
                        <img src="../sync/<?= special($attacker['sync_name']) ?>.png">
                        <button class="btn">選びなおす</button>
                    </li>
                    <li>
                        <img src="../trainer/<?= special($technical['trainer_name']) ?>.png">
                        <img src="../sync/<?= special($technical['sync_name']) ?>.png">
                        <button class="btn">選びなおす</button>
                    </li>
                    <li><img src="../trainer/<?= special($support['trainer_name']) ?>.png">
                        <img src="../sync/<?= special($support['sync_name']) ?>.png">
                        <button class="btn">選びなおす</button>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../JS/create-random-party.js"></script>
</body>

</body>

</html>