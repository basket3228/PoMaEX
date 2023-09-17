<?php
require('../../function.php');
$trainers = get_trainer();
$mainChars = get_mainTrainer();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trainer-List</title>
  <link rel="icon" href="../../img/logo.ico" />
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="../../CSS/General/trainer-list.css">
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

    <main class="main">
      <div class="content">
        <h2>バディーズ一覧</h2>
        <!-- ↓ボタンはトレーナーアイコンと卵のアイコンがいい。押すと交互に切り替え。 -->
        <button>表示切り替え</button>
        <ul>

<!-- ↓初期表示(ボタンを押すと表示切り替え、下記に切り替え後あり。) -->
          <?php foreach ($trainers as $trainer) { ?>
            <li>
              <?php if ($trainer['role_name'] == 'アタッカー') { ?>
                <img src="../../img/アタッカー.png">
              <?php } else if ($trainer['role_name'] == 'テクニカル') { ?>
                <img src="../../img/テクニカル.png">
              <?php } else if ($trainer['role_name'] == 'サポート') { ?>
                <img src="../../img/サポート.png">
              <?php } else if ($trainer['role_name'] == 'スピード') { ?>
                <img src="../../img/スピード.png">
              <?php } else if ($trainer['role_name'] == 'フィールド') { ?>
                <img src="../../img/フィールド.png">
              <?php } ?>
              <img src="../../trainer/<?= special($trainer['trainer_name']) ?>.png">
              <img src="../../sync/<?= special($trainer['sync_name']) ?>.png">
            </li>
          <?php } ?>
          <!-- ↓クリックされたら下記を表示。 -->
<!--
          <?php foreach ($mainChars as $main) { ?>
            <li>
              <?php if ($main['role_name'] == 'アタッカー') { ?>
                <img src="../../img/アタッカー.png">
              <?php } else if ($main['role_name'] == 'テクニカル') { ?>
                <img src="../../img/テクニカル.png">
              <?php } else if ($main['role_name'] == 'サポート') { ?>
                <img src="../../img/サポート.png">
              <?php } else if ($main['role_name'] == 'スピード') { ?>
                <img src="../../img/スピード.png">
              <?php } else if ($main['role_name'] == 'フィールド') { ?>
                <img src="../../img/フィールド.png">
              <?php } ?>
              <img src="../../trainer/<?= special($main['trainer_name']) ?>.png">
              <img src="../../sync/<?= special($main['sync_name']) ?>.png">
            </li>
          <?php } ?> -->
        </ul>
      </div>
    </main>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../../JS/General/trainer-list.js"></script>
</body>

</html>