<?php
require('../function.php');
$trainers = get_trainer();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="icon" href="../img/logo.ico" />
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="../CSS/trainer-list.css">
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
        <h2>バディーズ一覧</h2>
        <ul>
          <?php foreach ($trainers as $trainer) { ?>
            <li><img src="../trainer/<?= special($trainer['trainer_name']) ?>.png">
              <img src="../sync/<?= special($trainer['sync_name']) ?>.png">
            </li>
          <?php } ?>
        </ul>
      </div>
    </main>
  </div>

</body>

</html>