<nav class="nav relative">
  <ul>
    <?php if ($title == "PoMaEX for Pokemon-Masters-EX") { ?>
      <li>
        <a class="bread-now">トップ</a>
      </li>
    <?php } ?>

    <!-- LG -->
    <?php if ($title == "PoMaEX | LG:LG-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a class="bread-now">レジェンドアドベンチャー</a>
      </li>
    <?php } ?>
    <?php if ($title == "PoMaEX | LG:Party-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/LG/LGList.php">レジェンドアドベンチャー</a>
      </li>
      <li>
        <a class="bread-now">パーティ一覧</a>
      </li>
    <?php } ?>
    <?php if ($title == "PoMaEX | LG:search") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/LG/LGList.php">レジェンドアドベンチャー</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/LG/LG-party-list.php?LG_id=<?php echo $LG_id ?>">パーティ一覧</a>
      </li>
      <li>
        <a class="bread-now"><?php echo special($enemy['enemy_name']) ?></a>
      </li>
    <?php } ?>

    <!-- CS -->
    <?php if ($title == "PoMaEX | CS:Type-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a class="bread-now">チャンピオンバトル</a>
      </li>
    <?php } ?>
    <?php if ($title == "PoMaEX | CS:Party-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/CS/CS-type-list.php">チャンピオンバトル</a>
      </li>
      <li>
        <?php foreach ($types as $type) { ?>
          <?php if ($type['type_id'] == $type_id) { ?>
            <a class="bread-now"><?= special($type['type_name']) ?>タイプ</a>
          <?php } ?>
        <?php } ?>
      </li>
    <?php } ?>

    <!-- SA -->
    <?php if ($title == "PoMaEX | SA:SA-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a class="bread-now">スコアアタック</a>
      </li>
    <?php } ?>
    <?php if ($title == "PoMaEX | SA:Party-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/SA/SAList.php">スコアアタック</a>
      </li>
      <li>
        <a class="bread-now">パーティ一覧</a>
      </li>
    <?php } ?>

    <!-- 共通のパーティ詳細画面 -->
    <?php if ($title == "PoMaEX | LG:Party-detail") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/LG/LGList.php">レジェンドアドベンチャー</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/LG/LG-party-list.php?LG_id=<?php echo $LG_id ?>">パーティ一覧</a>
      </li>
      <li>
        <a class="bread-now">パーティ詳細</a>
      </li>
      <!-- 未完成 -->
    <?php } ?>
    <?php if ($title == "PoMaEX | CS:Party-detail") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/CS/CS-type-list.php">チャンピオンバトル</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/CS/CS-party-list.php?type_id=""><?= $pageType ?>タイプ</a>
      </li>
      </li>
      <li>
      <a class=" bread-now">パーティ詳細</a>
      </li>
      <!-- 未完成 -->
    <?php } ?>
    <?php if ($title == "PoMaEX | SA:Party-detail") { ?>
      <li>
        <a href=" /PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="popup-partylist">編成一覧</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/SA/SAList.php">スコアアタック</a>
      </li>
      <li>
        <a href="/PoMaEX-main/PHP/SA/SA-party-list.php?SA_id=">パーティ一覧</a>
      </li>
      <li>
        <a class="bread-now">パーティ詳細</a>
      </li>
      <!-- 未完成 -->
    <?php } ?>

    <!-- バディーズ一覧 -->
    <?php if ($title == "PoMaEX | Trainer-List") { ?>
      <li>
        <a href=" /PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="bread-now">バディーズ一覧</a>
      </li>
    <?php } ?>

    <!-- 単騎情報 -->
    <?php if ($title == "PoMaEX | LG:Info-List") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="bread-now">単騎情報</a>
      </li>
    <?php } ?>
    <?php if ($title == "PoMaEX | LG:Solo-Info") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a href="/PoMaEX-main//PHP/General/info-list.php">単騎情報</a>
      </li>
      <li>
        <a class="bread-now"><?php echo special($enemy['enemy_name']) ?></a>
      </li>
    <?php } ?>

    <!-- ランダム編成生成 -->
    <?php if ($title == "PoMaEX | Random-Party") { ?>
      <li>
        <a href="/PoMaEX-main/">トップ</a>
      </li>
      <li>
        <a class="bread-now">ランダム編成生成</a>
      </li>
    <?php } ?>
  </ul>
  <div class="nav-pomatools">
    <a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">
      <img src="/PoMaEX-main/img/General/pomatools_icon.png" alt="pomatools">
    </a>
  </div>
</nav>
