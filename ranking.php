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

    <title>レビュー・ランキング</title>
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
      <h3>レビュー・ランキング</h3>

      <div>
        <div><h3>貸出冊数ランキング</h3></div>
        <div class="point">
          <div>1位</div>
          <div>
            <img src="./img/ranking1.png" class="ranking"/>
          </div>
          <div>
            <span>書名　：</span>
            <span>Lean UX:アジャイルなチームによるプロダクト開発<span>
          </div>
          <div>
            <span>著者　：</span>
            <span>ジェフ・ゴーセルフ, ジョシュ・セイデン；児島修訳</span>
          </div>
        </div><br />

        <div class="point">
          <div>2位</div>
          <div>
            <img src="./img/ranking2.png" class="ranking"/>
          </div>
          <div>
            <span>書名　：</span>
            <span>Processingプログラミングで学ぶ情報表現入門<span>
          </div>
          <div>
            <span>著者　：</span>
            <span>美馬義亮</span>
          </div>
        </div><br />

        <div class="point">
          <div>3位</div>
          <div>
            <img src="./img/ranking3.png" class="ranking"/>
          </div>
          <div>
            <span>書名　：</span>
            <span>Rによる自動データ収集 : Webスクレイピングとテキストマイニングの実践ガイド<span>
          </div>
          <div>
            <span>著者　：</span>
            <span>Simon Munzert [ほか] 原著 ; 石田基広 [ほか] 訳</span>
          </div>
        </div><br />
      </div>

      <div>
        <div><h3>レビューランキング</h3></div>
        <div class="point">
          <div>1位</div>
          <div>
            <img src="./img/ranking1.png" class="ranking"/>
          </div>
          <div>
            <span>書名　：</span>
            <span>Lean UX:アジャイルなチームによるプロダクト開発<span>
          </div>
          <div>
            <span>著者　：</span>
            <span>ジェフ・ゴーセルフ, ジョシュ・セイデン；児島修訳</span>
          </div>
        </div><br />

        <div class="point">
          <div>2位</div>
          <div>
            <img src="./img/ranking2.png" class="ranking"/>
          </div>
          <div>
            <span>書名　：</span>
            <span>Processingプログラミングで学ぶ情報表現入門<span>
          </div>
          <div>
            <span>著者　：</span>
            <span>美馬義亮</span>
          </div>
        </div><br />

        <div class="point">
          <div>3位</div>
          <div>
            <img src="./img/ranking3.png" class="ranking"/>
          </div>
          <div>
            <span>書名　：</span>
            <span>Rによる自動データ収集 : Webスクレイピングとテキストマイニングの実践ガイド<span>
          </div>
          <div>
            <span>著者　：</span>
            <span>Simon Munzert [ほか] 原著 ; 石田基広 [ほか] 訳</span>
          </div>
        </div><br />
      </div>

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
