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

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootflat.github.io-master/css/site.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="bootflat.github.io-master/js/site.min.js"></script>
  <title>マイライブラリ</title>
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
    <h3>マイライブラリ</h3><br>

    <div>
      <div class="panel panel-default">
        <div class="panel-heading"><h5>お知らせ</h5></div>
        <div class="panel-body">
          各人へのお知らせはありません。
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading"><h5>借用中の資料</h5></div>
        <div class="panel-body">
          借りている資料はありません。
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading"><h5>入手待ちの資料</h5></div>
        <div class="panel-body">
          入手待ちの資料はありません。
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading"><h5>ブックマーク</h5></div>
        <div class="panel-body">
          <form action="bookmark.php" method="post">
            <input type="submit" value="ブックマーク一覧へ" class="btn btn-success"/>
          </form>　
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading"><h5>利用履歴</h5></div>
        <div class="panel-body">
          <form action="history.php" method="post">
            <input type="submit" value="利用履歴へ" class="btn btn-success"/>
          </form>　
        </div>
      </div>

      <div>
        <button onclick="history.back()" class="btn btn-normal">戻る</button>
      </div><br>

    </div>
  </div>
  <!-- footer -->
  <div class="site-footer">
    <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
  </div>
</body>
</html>
