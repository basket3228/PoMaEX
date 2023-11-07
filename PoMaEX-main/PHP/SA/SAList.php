<?php
require('../../function.php');

$parties = get_SApartyList();
$title = "PoMaEX | SA:SA-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <div class="content">
            <h2 class="sub-title">編成一覧</h2>
            <a class="main-btn" href="add-LG.php">追加</a>
            <ul class="two-columns SA-list">
                <?php foreach ($parties as $party) { ?>
                        <li class="SA">
                            <a href="SA-party-list.php?SA_id=<?= special($party['SA_id']) ?>">
                                <img src="../../img/<?= special($party['name']) ?>.png">
                            </a>
                            <button class="party-delete LG-delete delete-btn" data-delete="delete-LG.php?SA_id=<?= special($party['SA_id']) ?>"></button>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>
