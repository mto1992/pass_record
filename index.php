<?php

echo 'phpによる出力';

var_dump($_POST);

/*
phpで行う内容は、
試行パターンを入力した際、DBに接続し既存のレコードと比較
合致するものが1件でもあれば重複になるため登録はしない
合致しなければ新規のため登録する

*/

?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>パスワード試行パターン登録</title>
  </head>
  <body>
    <h3>試行パターン重複チェック</h3>
    <div class="pass_check_box">
      <form class="pass_check_form" action="index.php" method="post">
        <input type="text" name="pass_code" value="">
        <input type="submit" value="チェック実行"><input type="reset" value="リセット">
      </form>
    </div>
    <?php
      /*
        既存のレコードを出力する
        テーブルにするが、プルダウンかチェックボックスによる状態変化をつける
        状態は「登録のみ」「試行中」「検査終了」の3つ
        文字列によっては試行開始から即終了まで到達しない可能性があるため、試行中は絶対に必要

      */

     ?>
  </body>
</html>
