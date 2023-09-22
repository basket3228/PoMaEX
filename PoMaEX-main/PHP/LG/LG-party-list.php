<?php
require('../../function.php');
$category_id = $_GET['category_id'];
$LG_id = $_GET['LG_id'];
$parties = get_LGParty($LG_id);
$e1 = get_enemy1($LG_id);
$e2 = get_enemy2($LG_id);
$e3 = get_enemy3($LG_id);
$title = "PoMaEX | LG:Party-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2><?= LG ?></h2>
        <a href="add-LGparty.php?LG_id=<?= special($e1['LG_id']) ?>&category_id=<?= special($category_id) ?>&enemy_id1=<?= special($e1['enemy_id1']) ?>&enemy_id2=<?= special($e2['enemy_id2']) ?>&enemy_id3=<?= special($e3['enemy_id3']) ?>"><button>追加</button></a>
        <ul class="party-list">
            <li class="enemy">
                <h2><a href="LGsearch.php?enemy_id=<?= special($e1['enemy_id1']) ?>&LG_id=<?= special($e1['LG_id']) ?>&category_id=<?= special($category_id) ?>"><button><?php echo special($e1['e1']) ?></button></a></h2>
                <ul class="party">
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['trainer_name'] != null) { ?>
                            <?php if ($party['enemy_id'] == $e1['enemy_id1']) { ?>
                                <li>
                                    <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= special($category_id) ?>">編成詳細へ</a>
                                    <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                    <a href="delete-LG-list.php?LGparty_id=<?= special($party['LGparty_id']) ?>&LG_id=<?= special($LG_id) ?>&category_id=<?= special($category_id) ?>"><button class="delete">削除</button></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li class="enemy">
                <h2><a href="LGsearch.php?enemy_id=<?= special($e2['enemy_id2']) ?>&LG_id=<?= special($e1['LG_id']) ?>&category_id=<?= special($category_id) ?>"><button><?php echo special($e2['e2']) ?></button></a></h2>
                <ul class="party">
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['trainer_name'] != null) { ?>
                            <?php if ($party['enemy_id'] == $e2['enemy_id2']) { ?>
                                <li>
                                    <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= special($category_id) ?>">編成詳細へ</a>
                                    <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                    <a href="delete-LG-list.php?LGparty_id=<?= $party['LGparty_id'] ?>&LG_id=<?= special($LG_id) ?>&category_id=<?= special($category_id) ?>"><button class="delete">削除</button></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </li>
            <li class="enemy">
                <h2><a href="LGsearch.php?enemy_id=<?= special($e3['enemy_id3']) ?>&LG_id=<?= special($LG_id) ?>&category_id=<?= special($category_id) ?>"><button><?php echo special($e3['e3']) ?></button></a></h2>
                <ul class="party">
                    <?php foreach ($parties as $party) { ?>
                        <?php if ($party['trainer_name'] != null) { ?>
                            <?php if ($party['enemy_id'] == $e3['enemy_id3']) { ?>
                                <li>
                                    <a href="../General/party-detail.php?LGparty_id=<?= special($party['LGparty_id']) ?>&category_id=<?= special($category_id) ?>">編成詳細へ</a>
                                    <img src="../../trainer/<?= special($party['trainer_name']) ?>.png">
                                    <a href="delete-LG-list.php?LGparty_id=<?= special($party['LGparty_id']) ?>&LG_id=<?= special($LG_id) ?>&category_id=<?= special($category_id) ?>"><button class="delete">削除</button></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>