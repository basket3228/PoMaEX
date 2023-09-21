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
  </header>