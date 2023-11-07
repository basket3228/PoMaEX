<?php
require('../../function.php');
$trainers = get_trainer();
$mainChars = get_mainTrainer();
$types = get_type();
$roles = get_role();
$title = "PoMaEX | Trainer-List";
$syncIndex = 0;
$tempSync = "";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
  <!-- <aside class="sidebar">あ</aside> -->
  <?php require_once("../General/nav.php") ?>
  <main class="main">
    <h2 class="sub-title">バディーズ一覧</h2>
    <div class="" style="display: none">
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
    </div>
    <ul class="detail-list">
      <?php foreach ($trainers as $trainer) { ?>
        <li class="party-detail CS-<?php echo special($trainer['type_name']) ?>-detail" style="margin-bottom: calc(16px + 1vw)">
          <div class="role">
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
          </div>
          <img src="../../trainer/<?= special($trainer['trainer_name']) ?>.png">
          <img class="party-detail-sync CS-<?php echo special($trainer['type_name']) ?>-detail" src="../../sync/<?= special($trainer['sync_name']) ?>.png">
        </li>
      <?php } ?>
    </ul>
  </main>
  <aside class="sidebar">
    <ul class="sync-list">
      <?php foreach ($mainChars as $main) { ?>
          <?php if ($tempSync != $main['sync_name']) { ?>
            <li class="sync clickable" data-syncName="<?= $main['sync_name'] ?>">
              <img src="../../sync/<?= special($main['sync_name']) ?>.png">
            </li>
            <?php $tempSync = $main['sync_name'] ?>
        <?php } ?>
        <?php $syncIndex += 1 ?>
      <?php } ?>
    </ul>
    <div class="popup-sync">
      <div class="popup-inner">
        <?php foreach ($mainChars as $main) { ?>
            <li class="sync sync-popup" data-syncName="<?= $main['sync_name'] ?>">
              <?php if ($main['role_name'] == 'アタッカー') { ?>
                <img class="sync-role" src="../../img/アタッカー.png">
              <?php } else if ($main['role_name'] == 'テクニカル') { ?>
                <img class="sync-role" src="../../img/テクニカル.png">
              <?php } else if ($main['role_name'] == 'サポート') { ?>
                <img class="sync-role" src="../../img/サポート.png">
              <?php } else if ($main['role_name'] == 'スピード') { ?>
                <img class="sync-role" src="../../img/スピード.png">
              <?php } else if ($main['role_name'] == 'フィールド') { ?>
                <img class="sync-role" src="../../img/フィールド.png">
              <?php } ?>
              <img src="../../sync/<?= special($main['sync_name']) ?>.png">
            </li>
        <?php } ?>
      </div>
      <div class="popup-btn">
        閉じる
      </div>
    </div>
  </aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>
