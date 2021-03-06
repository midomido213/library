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

  <title>利用ガイド</title>
</head>
<body class="main">
  <!-- header -->
  <div class="container">
    <div class="col-md-8">
      <h4>岩手県立大学メディアセンター</h4>
      <img src="./img/1.png" class="img-rounded img-responsive">
    </div>
  </div>

  <h3>利用ガイド</h3>

  <div class="container documents">

    <img src="./img/無題.png" class="img-rounded img-responsive">
    <img src="./img/無題2.png" class="img-rounded img-responsive">
    <img src="./img/無題3.png" class="img-rounded img-responsive">
    <img src="./img/無題4.png" class="img-rounded img-responsive">
    <img src="./img/無題5.png" class="img-rounded img-responsive">
    <img src="./img/無題6.png" class="img-rounded img-responsive">
    <img src="./img/無題7.png" class="img-rounded img-responsive">
    <img src="./img/無題8.png" class="img-rounded img-responsive">

    <div>
      <button onclick="history.back()" class="btn btn-normal">戻る</button>
    </div><br>
  </div>

  <!-- footer -->
  <div class="site-footer">
    <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
  </div>
</body>
</html>
