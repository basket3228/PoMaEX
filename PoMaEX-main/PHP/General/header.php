<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <link rel="icon" href="/PoMaEX-main/img/logo.ico" />
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="/PoMaEX-main/CSS/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap" rel="stylesheet" />
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      $(".nav-down-arrow").click(() => {
        $(".nav-sublist").toggleClass("open");
      });

      $(".popup-partylist").click(() => {
        $('.popup').addClass('display');
      });

      $(".popup-btn").click(() => {
        $('.popup').removeClass('display');
      });
    });
  </script>
</head>

<body>
  <header class="header">
    <h1 class="logo">
      <a href="/PoMaEX-main/index.php"><img src="/PoMaEX-main/img/logo.png" alt="PoMaEX" /></a>
    </h1>
    <nav class="nav nav-new">
      <ul class="nav-list">
        <li class="nav-down">
          <a class="popup-partylist">編成一覧</a>
          <div class="nav-down-arrow">▼</div>
        </li>
        <li class="nav-toggle">
          <ul class="nav-sublist">
            <li>
              <a href="/PoMaEX-main/PHP/LG/LGList.php">レジェンドアドベンチャー</a>
            </li>
            <li>
              <a href="/PoMaEX-main/PHP/CS/CS-type-list.php">チャンピオンバトル</a>
            </li>
            <li>
              <a href="/PoMaEX-main/PHP/SA/SAList.php">スコアアタック</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="/PoMaEX-main/PHP/General/trainer-list.php">バディーズ一覧</a>
        </li>
        <li>
          <a href="/PoMaEX-main/PHP/General/info-list.php">単騎情報</a>
        </li>
        <li>
          <a href="/PoMaEX-main/PHP/General/create-random-party.php">乱数編成作成</a>
        </li>
        <li class="flex-unset">
          <a href="https://ng-pomatools.web.app/pairs/900000/2500" target="_blank">
            <img src="/PoMaEX-main/img/pomatools_icon.png" alt="pomatools">
          </a>
        </li>
      </ul>
    </nav>
  </header>