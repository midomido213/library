<?php
session_start();

header("Content-type: text/html; charset=utf-8");

// ログイン状態のチェック
if (!isset($_SESSION["account"])) {
  header("Location: login_form.php");
  exit();
}
$account = $_SESSION['account'];

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="bootflat.github.io-master/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="bootflat.github.io-master/js/site.min.js"></script>

    <title>メインメニュー</title>
  </head>
  <body class="main">
    <!-- header -->
    <div class="container">
      <div class="col-md-8">
        <h4>岩手県立大学メディアセンター</h4>
        <img src="./img/1.png" class="img-rounded img-responsive">
      </div>
    </div>

    <!-- documents -->
    <div class="container documents">
      <div>
        <h5><?=htmlspecialchars($account,ENT_QUOTES)."さん、こんにちは！";?></h5>
      </div>

      <div class="example">
        <form action="guid.php">
          <button type="submit" class="btn btn-block">利用ガイド</button>
        </form>
      </div>
      <div class="example">
        <form action="mylibrary.php">
          <button type="submit" class="btn btn-block">マイライブラリ</button>
        </form>
      </div>
      <div class="example">
        <form action="http://libipu.iwate-pu.ac.jp/mylimedio/search/search-input.do?mode=comp" >
          <button type="submit" class="btn btn-block">蔵書検索</button>
        </form>
      </div>
      <div class="example">
        <form action="journal.php">
          <button type="submit" class="btn btn-block">電子ジャーナル</button>
        </form>
      </div>
      <div class="example">
        <form action="ranking.php">
          <button type="submit" class="btn btn-block">レビュー・ランキング</button>
        </form>
      </div>
      <div class="example">
        <form action="history.php">
          <button type="submit" class="btn btn-block">ポイント履歴</button>
        </form>
      </div>

      <a href="logout.php">ログアウト</a>
    </div>
    <!-- footer -->
    <div class="site-footer">
      <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
    </div>
  </body>
</html>
