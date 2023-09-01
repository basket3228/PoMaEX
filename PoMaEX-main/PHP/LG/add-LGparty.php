<?php
require('../../function.php');

$category_id = $_GET['category_id'];
$eventnumber = $_GET['eventnumber'];
$e1 = get_enemy1($eventnumber);
$e2 = get_enemy2($eventnumber);
$e3 = get_enemy3($eventnumber);
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
                    <input type="number" value="<?= $category_id ?>">
                    <input type="number" value="<?= $eventnumber ?>">
                    <input type="text">
                    <input type="number" value="<?= special($e1['enemy_id1']) ?>">
                    <input type="number" value="<?= special($e2['enemy_id2']) ?>">
                    <input type="number" value="<?= special($e3['enemy_id3']) ?>">
                </form>
            </div>
        </main>
    </div>
</body>

</html>