<?php
session_start();

header("Content-type: text/html; charset=utf-8");

//クロスサイトリクエストフォージェリ（CSRF）対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

?>

<!DOCTYPE html>
<html>
<head>
  <title>ログイン</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="bootflat.github.io-master/css/site.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container"><br>
    <!-- header -->
    <div class="container">
      <div class="col-md-8">
        <h4>岩手県立大学メディアセンター</h4>
        <img src="./img/1.png" class="img-rounded img-responsive">
      </div>
    </div>

    <div class="container documents">
    <h3>ログイン</h3><br>

    <p style="color:red">※デモ版なのでそのままログインしてください。</P>
    <form action="login_check.php" method="post">
      <p>ユーザID：<input type="text" name="account" size="25" value="test" class="form-control" readonly="readonly"/></p>
      <p>パスワード：<input type="password" name="password" size="25" value="test" class="form-control" readonly="readonly"/></p><br><br>
      <input type="hidden" name="token" value="<?=$token?>">
      <input type="submit" value="ログイン" class="btn btn-primary" onclick="check()" />
    </form><br>

    <p><a class="btn btn-primary" href="http://153.126.145.101/Proj/top.php">トップに戻る</a></p>
  </div>
  </div>
</body>
</html>
