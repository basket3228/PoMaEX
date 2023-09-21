<?php $title = "PoMaEX for Pokemon-Masters-EX" ?>
<?php require_once("PHP/General/header.php") ?>
<div class="container">
  <?php require_once("PHP/General/nav.php") ?>
  <main class="main">
    <div class="kv">
      <img src="img/Pokemon-Masters-EX.jpeg" />
    </div>
    <ul class="index-btns">
      <li class="list-item">
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li class="list-item">
        <a href="PHP/General/trainer-list.php">バディーズ一覧</a>
      </li>
      <li class="list-item">
        <a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">PoMaTool</a>
      </li>
      <li class="list-item">
        <a href="PHP/General/create-random-party.php">乱数編成作成</a>
      </li>
    </ul>
  </main>
  <aside class="sidebar">サブメニューです</aside>
</div>
<?php require_once("PHP/General/footer.php");
