<?php

echo "aaaa";
exit;
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link rel="stylesheet" href="../../base/toppage.css">
    <link rel="stylesheet" href="../../base/toppage@media.css">
    <script language="javascript" src="../../base/header.js"></script>
    <link rel="shortcut icon" href="../../base/seishoukailogo.png" type="image/x-icon" >
  </head>

<body>
  <script>header();</script>
  <div class="top-wrapper">
    <div class="container">
      <h1>医療法人<br>正翔会クリニック　江南</h1>
      <p>このページは</p>
      <p><span class="focus">看護師専用のマニュアル</span></p>
      <p>を載せているページです</p>
    </div>
  </div>
  <div class="contact-form">
    <h3 class="section-title">お問い合わせ</h3>
    <p class="contact-p">お問い合わせ内容</p>
    <div class="situmon">
      <select name=”situmon”>
        <option value=”situmon”>▼選択してください</option>
        <option value=”houkoku”>間違いの報告</option>
        <option value=”tuika”>追加依頼(既にあるページへの文章追加)</option>
        <option value=”sinki”>新規作成依頼（新しいマニュアル）</option>
        <option value=”sonota”>その他の問い合わせや質問</option>
    </div>
    <textarea></textarea>
    <p>お問い合わせいただく内容は<span>匿名で下記に表示されます</span>。</p>
    <div class="input-field">
    <input class="contact-submit" type="submit" value="送信">
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="footer-logo">
      <img src="../../base/toplogo.png">
      </div>
      <p>old nagao home clinic. ...for the patient.</p>
    </div>
  </footer>
</body>
</html>