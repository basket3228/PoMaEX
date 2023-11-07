<?php
require('../../function.php');

$enemies = get_enemy();
$title = "PoMaEX | LG:Add-LG";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <form action="add-LG-post.php?>" autocomplete="off" method="get">
            <label for="name">名前</label>
            <input type="text" name="name" id="name">
            <label for="eventnumber">第何回</label>
            <input type="number" min="10" name="eventnumber" id="eventnumber">
            <select name="enemy1" id="enemy1">
                <option value="">--選択してください--</option>
                <?php foreach ($enemies as $enemy) { ?>
                    <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                <?php } ?>
            </select>
            <select name="enemy2" id="enemy2">
                <option value="">--選択してください--</option>
                <?php foreach ($enemies as $enemy) { ?>
                    <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                <?php } ?>
            </select>
            <select name="enemy3" id="enemy3">
                <option value="">--選択してください--</option>
                <?php foreach ($enemies as $enemy) { ?>
                    <option value="<?= special($enemy['enemy_id']) ?>"><?= special($enemy['enemy_name']) ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="登録">
        </form>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>
