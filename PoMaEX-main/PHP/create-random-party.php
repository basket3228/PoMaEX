<?php
require('../function.php');

$trainer = get_trainer();
$random1 = $trainer[array_rand($trainer)];
$random2 = $trainer[array_rand($trainer)];
$random3 = $trainer[array_rand($trainer)];
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
                    <li id="liat2"><a href="../PHP/trainer-list.php">バディーズ一覧</a></li>
                    <li id="list3"><a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a></li>
                    <li id="list4"><a href="../PHP/create-random-party.php">乱数編成生成</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <div class="content">
                <ul>
                    <!-- 選びなおすボタンでそれぞれで再度乱数生成をする(JSで操作)
                    初期表示はロール被りなし、主人公被りは二枠までという条件で表示(主人公二枠なら残りは必ずEXキャラ) -->
                    <li><img src="../pokemas/<?= special($random1['trainer_name']) ?>.png">
                        <img src="../pokemas/<?= special($random1['sync_name']) ?>.png">
                        <button class="btn">選びなおす</button>
                    </li>
                    <li><img src="../pokemas/<?= special($random2['trainer_name']) ?>.png">
                        <img src="../pokemas/<?= special($random2['sync_name']) ?>.png">
                        <button class="btn">選びなおす</button>
                    </li>
                    <li><img src="../pokemas/<?= special($random3['trainer_name']) ?>.png">
                        <img src="../pokemas/<?= special($random3['sync_name']) ?>.png">
                        <button class="btn">選びなおす</button>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    </div>
</body>
<script src="../JS/party-detail.js"></script>

</body>

</html>