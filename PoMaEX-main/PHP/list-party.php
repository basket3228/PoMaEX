<?php
require('../function.php');
$parties = get_party();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party-list</title>
    <link rel="icon" href="../img/logo.ico" />
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="../CSS/list-party.css">
</head>

<body>
    <div class="container">
        <header id="header">
            <h1 class="h1"><a href="../HTML/index.html"><img src="../img/logo.png"></a></h1>
            <nav>
                <ul id="nav-list">
                    <li id="list1"><a href="../PHP/list-party.php">編成一覧</a></li>
                    <li id="liat2"><a href="../PHP/list-trainers.php">バディーズ一覧</a></li>
                    <li id="list3"><a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a></li>
                    <li id="list4"><a href="../PHP/create-random-party.php">乱数編成生成</a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <div class="content">
                <ul>
                    <?php foreach ($parties as $party) { ?>
                        <li><a href="party-detail.php?party_id=<?= special($party['party_id']) ?>"><?= special($party['party_name']) ?></a>
                            <img src="../pokemas/<?= special($party['trainer_name']) ?>.png">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </main>
    </div>
</body>
<script src="list-party.js"></script>

</html>