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
    <div>
      <h5><?=htmlspecialchars($account,ENT_QUOTES)."さん、こんにちは！";?></h5>
    </div>

    <div class="container documents">
      <div class="example">
        <form action="guid.php">
          <button type="button" class="btn btn-block">利用ガイド</button>
        </form>
      </div>
      <div class="example">
        <button type="button" class="btn btn-block">マイライブラリ</button>
      </div>
      <div class="example">
        <button type="button" class="btn btn-block">蔵書検索</button>
      </div>
      <div class="example">
        <button type="button" onclick="location.href='http://www2.iwate-pu.ac.jp/office/library/zosyo/online_j.html'" class="btn btn-block">電子ジャーナル</button>
      </div>
      <div class="example">
        <button type="button" class="btn btn-block">レビュー・ランキング</button>
      </div>
      <div class="example">
        <form action="history.php">
          <button type="submit" class="btn btn-block">利用履歴</button>
        </form>
      </div>
    </div>

    <a href="logout.php">ログアウト</a>

    <!-- footer -->
    <div class="site-footer">
      <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
    </div>
  </body>
</html>
