<?php
require('../../function.php');
$categories = get_category();
$title = "PoMaEX | Party-List";
?>

<?php require_once("../General/header.php") ?>
<div class="container">
    <?php require_once("../General/nav.php") ?>
    <main class="main">
        <?php foreach ($categories as $category) { ?>
            <?php if ($category['category_name'] == 'レジェンドアドベンチャー') { ?>
                <a href="../LG/LGList.php?category_id=<?= special($category['category_id']) ?>"><?= special($category['category_name']) ?>
                    <img src="../../img/LG.png"></a>
            <?php } else if ($category['category_name'] == 'チャンピオンバトル') { ?>
                <a href="../CS/CS-type-list.php?category_id=<?= special($category['category_id']) ?>"><?= special($category['category_name']) ?>
                    <img src="../../img/CS.png"></a>
            <?php } else if ($category['category_name'] == 'スコアアタック') { ?>
                <a href="../SA/SAList.php?category_id=<?= special($category['category_id']) ?>"><?= special($category['category_name']) ?>
                    <img src="../../img/SA.png"></a>
            <?php } ?>
        <?php } ?>
    </main>
    <aside class="sidebar">サブメニューです</aside>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/PoMaEX-main/index.js"></script>
<?php require_once('../General/footer.php') ?>