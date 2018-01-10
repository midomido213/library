<?php
// session_start();
//
// header("Content-type: text/html; charset=utf-8");
//
// // ログイン状態のチェック
// if (!isset($_SESSION["account"])) {
//   header("Location: login_form.php");
//   exit();
// }
// $account = $_SESSION['account'];

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
        <h3>Myライブラリーアプリ</h3>
        <h4>岩手県立大学メディアセンター</h4>
      </div>
    </div>

    <!-- documents -->
    <h5><?="<p>".htmlspecialchars($account,ENT_QUOTES)."さん、こんにちは！</p>";?></h5><br>

    <h3>レビュー一覧</h3>

    <div class="container documents">
      <div>
        レビュー1
      </div>
      <div>
        レビュー2
      </div>
      <div>
        レビュー3
      </div>
      <div>
        レビュー4
      </div>
    </div>

    <a href="logout.php">ログアウト</a>

    <!-- footer -->
    <div class="site-footer">
      <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
    </div>
  </body>
</html>
