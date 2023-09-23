<?php
require('../../function.php');
$trainers = get_trainer();
$mainChars = get_mainTrainer();
$types = get_type();
$roles = get_role();
$title = "PoMaEX | Trainer-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
  <?php require_once("../General/nav.php") ?>
  <main class="main">
    <h2>バディーズ一覧</h2>
    <button>フィルター</button>
    <!-- ↓フィルターボタン押下時に表示 -->
    <?php foreach ($types as $type) { ?>
      <a href="filter.php?type_id=<?= special($type['type_id']) ?>"><button>
          <img src="../../type/<?= special($type['type_name']) ?>.png">
        </button></a>
    <?php } ?>
    <?php foreach ($roles as $role) { ?>
      <a href="filter.php?role_id=<?= special($role['role_id']) ?>"><button>
          <img src="../../img/<?= special($role['role_name']) ?>.png">
        </button></a>
    <?php } ?>
    <ul>
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
    </ul>
  </main>
  <aside class="sidebar">
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
        <img src="../../sync/<?= special($main['sync_name']) ?>.png">
      </li>
    <?php } ?>
  </aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>