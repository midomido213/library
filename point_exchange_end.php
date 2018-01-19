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
      <h3>ポイント交換申請完了</h3>

      <div>
        <p>ポイント交換申請しました。</p>
      </div>

      <div>
        <form action="MainMenu.php">
          <button type="submit" class="btn btn-normal">メインメニューへ戻る</button>
        </form>
      </div><br>

    </div>
    <!-- footer -->
    <div class="site-footer">
      <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
    </div>
  </body>
</html>
