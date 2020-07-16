<?php
session_start();
require('../dbconnect.php');
if(!isset($_SESSION['join'])){
	header('Location: index.php');
	exit();
}
if(!empty($_POST)){
	//登録処理をする
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ひとこと掲示板</title>

	<link rel="stylesheet" href="../../style.css" />
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>会員登録</h1>
  </div>
  <div id="content">
		<form action="" method="post">
		<input type="hidden" name="action" value="submit" />
		<dl>
		<dt>ニックネーム</dt>
		<dd>

		//6-5入力された情報を表示する。

		</dd>
		<dt>メールアドレス</dt>
		<dd>

		//6-5入力された情報を表示する。

		</dd>
		<dt>パスワード</dt>
		<dd>
		【表示されません】
		</dd>
		<dt>写真など</dt>
		<dd>

		//6-5入力された情報を表示する。

		</dd>
		</dl>
		<div><a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a> | <input
		type="submit" value="登録する" /></div>
		</form>
  </div>

</div>
</body>
</html>
