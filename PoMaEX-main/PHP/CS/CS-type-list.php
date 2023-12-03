<?php
require('../../function.php');

$types = get_type();
$title = "PoMaEX | CS:Type-List";

?>
<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <h2 class="kv">
            <img src="../../img/CS.png" alt="チャンピオンバトル">
        </h2>
        <ul class="type-list">
            <?php foreach ($types as $type) { ?>
                <li>
                    <a href="CS-party-list.php?type_id=<?= special($type['type_id']) ?>">
                        <img src="../../type/<?= special($type['type_name']) ?>.png">
                    </a>
                </li>
            <?php } ?>
        </ul>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<?php require_once('../General/footer.php') ?>