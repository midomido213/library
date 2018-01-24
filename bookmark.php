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
    <h3>ブックマーク一覧</h3><br>

    <div>
      <ul class="list-group">
        <li class="list-group-item">
          <form action="https://libipu.iwate-pu.ac.jp/mylimedio/search/book.do?nqid=19&mode=comp&database=local&searchTarget=BK&nqid=19&queryid=15&position=1&bibid=327218&detailCategory=book" method="post">
            <input type="submit" value="Lean UX:アジャイルなチームによるプロダクト開発" class="btn btn-link" />
          </form>　
          著者 ： ジェフ・ゴーセルフ, ジョシュ・セイデン；児島修訳</li>

          <li class="list-group-item">
            <form action="https://libipu.iwate-pu.ac.jp/mylimedio/search/book.do?nqid=24&mode=comp&database=local&searchTarget=BK&nqid=24&queryid=22&position=1&bibid=328443&detailCategory=book" method="post">
              <input type="submit" value="Processingプログラミングで学ぶ情報表現入門" class="btn btn-link" />
            </form>　
            著者 ： 美馬義亮</li>

            <li class="list-group-item">
              <form action="https://libipu.iwate-pu.ac.jp/mylimedio/search/book.do?nqid=28&mode=comp&database=local&searchTarget=BK&nqid=28&queryid=26&position=1&bibid=325540&detailCategory=book" method="post">
                <input type="submit" value="Rによる自動データ収集 : Webスクレイピングとテキストマイニングの実践ガイド" class="btn btn-link" />
              </form>　
              著者 ： Simon Munzert [ほか] 原著 ; 石田基広 [ほか] 訳</li>
            </ul>

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
