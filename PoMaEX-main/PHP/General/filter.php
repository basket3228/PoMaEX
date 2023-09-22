<?php
require('../../function.php');
if (isset($_GET['type_id'])) {
    $type_id = $_GET['type_id'];
    $trainers = get_trainerByType($type_id);
} else if (isset($_GET['role_id'])) {
    $role_id = $_GET['role_id'];
    $trainers = get_trainerByRole($role_id);
}
$title = "PoMaEX | Trainer-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2>バディーズ一覧</h2>
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
    <aside class="sidebar">サイドメニューです。</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>