<?php
require('../../function.php');

$category_id = $_GET['category_id'];
$LG_id = $_GET['LG_id'];
$trainers = get_trainer();
$luckyskills = get_luckyskill();
$enemy1 = $_GET['enemy_id1'];
$enemy2 = $_GET['enemy_id2'];
$enemy3 = $_GET['enemy_id3'];
$enemies = get_enemy();
$title = "PoMaEX | LG:Add-LG-Party";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <form action="add-LGparty-post.php">
            <ul>
                <li>
                    <div class="content1">
                        <input type="hidden" name="category_id" value="<?= $category_id ?>">
                        <input type="hidden" name="LG_id" value="<?= $LG_id ?>">
                        <label for="trainer1">トレーナー1</label>
                        <select name="trainer1" id="trainer1">
                            <option value="">--選択してください--</option>
                            <?php foreach ($trainers as $trainer) { ?>
                                <option value="<?= special($trainer['trainer_id']) ?>"><?= special($trainer['trainer_name']) ?></option>
                            <?php } ?>
                        </select>
                        <label for="luckyskill1">ポテンシャル</label>
                        <select name="luckyskill1" id="luckyskill1">
                            <option value="">--選択してください--</option>
                            <?php foreach ($luckyskills as $luckyskill) { ?>
                                <option value="<?= special($luckyskill['luckyskill_id']) ?>"><?= special($luckyskill['luckyskill_name']) ?></option>
                            <?php } ?>
                        </select>
                        <label for="URL1">PoMaTool_URL</label>
                        <input type="url" name="URL1" id="URL1" autocomplete="off">
                    </div>
                </li>
                <li>
                    <div class="content2">
                        <label for="trainer2">トレーナー2</label>
                        <select name="trainer2" id="trainer2">
                            <option value="">--選択してください--</option>
                            <?php foreach ($trainers as $trainer) { ?>
                                <option value="<?= special($trainer['trainer_id']) ?>"><?= special($trainer['trainer_name']) ?></option>
                            <?php } ?>
                        </select>
                        <label for="luckyskill2">ポテンシャル</label>
                        <select name="luckyskill2" id="luckyskill2">
                            <option value="">--選択してください--</option>
                            <?php foreach ($luckyskills as $luckyskill) { ?>
                                <option value="<?= special($luckyskill['luckyskill_id']) ?>"><?= special($luckyskill['luckyskill_name']) ?></option>
                            <?php } ?>
                        </select>
                        <label for="URL2">PoMaTool_URL</label>
                        <input type="url" name="URL2" id="URL2" autocomplete="off">
                    </div>
                </li>
                <li>
                    <div class="content3">
                        <label for="trainer3">トレーナー3</label>
                        <select name="trainer3" id="trainer3">
                            <option value="">--選択してください--</option>
                            <?php foreach ($trainers as $trainer) { ?>
                                <option value="<?= special($trainer['trainer_id']) ?>"><?= special($trainer['trainer_name']) ?></option>
                            <?php } ?>
                        </select>
                        <label for="luckyskill3">ポテンシャル</label>
                        <select name="luckyskill3" id="luckyskill3">
                            <option value="">--選択してください--</option>
                            <?php foreach ($luckyskills as $luckyskill) { ?>
                                <option value="<?= special($luckyskill['luckyskill_id']) ?>"><?= special($luckyskill['luckyskill_name']) ?></option>
                            <?php } ?>
                        </select>
                        <label for="URL3">PoMaTool_URL</label>
                        <input type="url" name="URL3" id="URL3" autocomplete="off">
                    </div>
                <li>
                    <div class="content4">
                        <select name="enemy" id="enemy">
                            <?php foreach ($enemies as $enemy) { ?>
                                <?php if ($enemy['enemy_id'] == $enemy1) { ?>
                                    <option value="<?= special($enemy1) ?>"><?php echo special($enemy['enemy_name']) ?></option>
                                <?php } else if ($enemy['enemy_id'] == $enemy2) { ?>
                                    <option value="<?= special($enemy2) ?>"><?php echo special($enemy['enemy_name']) ?></option>
                                <?php } else if ($enemy['enemy_id'] == $enemy3) { ?>
                                    <option value="<?= special($enemy3) ?>"><?php echo special($enemy['enemy_name']) ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                        <input type="submit" value="追加">
                    </div>
                </li>
                </li>
            </ul>
        </form>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>