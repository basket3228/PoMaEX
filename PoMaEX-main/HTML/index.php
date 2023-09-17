<?php require_once("../PHP/General/header.php") ?>
<div class="container">
  <?php require_once("../PHP/General/nav.php") ?>
  <main class="main">
    <div class="kv">
      <img src="../img/Pokemon-Masters-EX.jpeg" />
    </div>
    <ul class="index-btns">
      <li class="list-item">
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li class="list-item">
        <a href="../PHP/General/trainer-list.php">バディーズ一覧</a>
      </li>
      <li class="list-item">
        <a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a>
      </li>
      <li class="list-item">
        <a href="../PHP/General/create-random-party.php">乱数編成作成</a>
      </li>
    </ul>
  </main>
  <aside class="sidebar">サブメニューです</aside>
</div>
<div class="popup">
  <ul class="popup-inner">
    <li>
      <a href="../PHP/LG/LGList.php?category_id=1">
        <img src="../img/LG.png" alt="LG">
      </a>
    </li>
    <li>
      <a href="../PHP/CS/CS-type-list.php?category_id=2">
        <img src="../img/CS.png" alt="CS">
      </a>
    </li>
    <li>
      <a href="../PHP/SA/SAList.php?category_id=3">
        <img src="../img/SA.png" alt="SA">
      </a>
    </li>
  </ul>
  <div class="popup-btn">
    閉じる
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../JS/General/index.js"></script>
<script>
  $(".nav-down-arrow").click(() => {
    $(".nav-sublist").toggleClass("open");
  });

  $(".popup-partylist").click(() => {
    $('.popup').addClass('display');
  });

  $(".popup-btn").click(() => {
    $('.popup').removeClass('display');
  });
</script>
</body>

</html>