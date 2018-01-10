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
        <img src="./img/1.png" width="700" height="150">
      </div>
    </div>

    <!-- documents -->
    <h5><?="<p>".htmlspecialchars($account,ENT_QUOTES)."さん、こんにちは！</p>";?></h5><br>

    <h3>レビュー</h3>

    <div>
      <div>
        レーティング：<img src="./img/rating_star.png" height="50" width="200">
      </div>
      <div>
        レビュー文：</br>
        <?php echo htmlspecialchars($_POST['review']) ?>
      </div>
    </div><br>
    <div style="display:inline-flex">
      <form action="to_review.php" method="post">
        <!-- <input type="hidden" value="<?php //$_POST['rating'] ?>" />
        <input type="hidden" value="<?php //$_POST['review'] ?>" /> -->
        <input type="submit" value="戻る" class="btn btn-danger" />
      </form>　　
      <form action="review_comp.php" method="post">
        <!-- <input type="hidden" value="<?php //$_POST['rating'] ?>" />
        <input type="hidden" value="<?php //$_POST['review'] ?>" /> -->
        <input type="submit" value="送信" class="btn btn-primary"/>
      </form>
    </div></br>

    <!-- footer -->
    <div class="site-footer">
      <p>© 2017 岩手県立大学 ソフトウェア情報学部 佐々木研 D-9-e</p>
    </div>
  </body>
</html>
