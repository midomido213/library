<?php
session_start();

header("Content-type: text/html; charset=utf-8");

// ログイン状態のチェック
if (!isset($_SESSION["account"])) {
  header("Location: login_form.php");
  exit();
}

//セッション変数を全て解除
$_SESSION = array();

//セッションクッキーの削除
if (isset($_COOKIE["PHPSESSID"])) {
  setcookie("PHPSESSID", '', time() - 1800, '/');
}

//セッションを破棄する
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
  <title>ログアウト</title>
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="bootflat.github.io-master/css/site.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="container"><br>

    <?php
    echo "<p>ログアウトしました。</p>";

    echo "<a href='login_form.php'>ログイン画面へ</a>";
    ?>

  </div>
</body>
</html>
