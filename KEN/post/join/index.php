<?php
require('../dbconnect.php');
session_start();
if(!empty($_POST)){
//6-4　エラー項目の確認を記述


	$fileName = $_FILES['image']['name'];
//6-4 画像チェック機能を記述

	if(empty($error)){
		$image = date('YmdHis') . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'] . '../member_picture/' . $image);
		$_SESSION['join']=$_POST;
		$_SESSION['join']['image'] = $image;
		header('Location: check.php');
		exit();
	}
}
//6-5書き直し
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ひとこと掲示板</title>

	<link rel="stylesheet" href="../style.css" />
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>会員登録</h1>
  </div>
  <div id="content">
		<p>次のフォームに必要事項をご記入ください。</p>
		<form action="" method="post" enctype="multipart/form-data">
		<dl>
		<dt>ニックネーム<span class="required">必須</span></dt>
		<dd><input type="text" name="name" size="35" maxlength="255" /></dd>

		//6-4 ニックネームのチェック機能を記述

		<dt>メールアドレス<span class="required">必須</span></dt>
		<dd><input type="text" name="email" size="35" maxlength="255" />
		
		<?php if($error['email'] == 'duplicate'): ?>
		<p class="error">*指定されたメールアドレスは既に登録されています*</p>
		<?php endif; ?>
		</dd>
		<dt>パスワード<span class="required">必須</span></dt>
		<dd><input type="password" name="password" size="10" maxlength="20"
		/></dd>
		<dt>写真など</dt>
		<dd><input type="file" name="image" size="35" />
		//6-4エラーメッセージを表示させる
		
		</dd>
		</dl>
		<div><input type="submit" value="入力内容を確認する" /></div>
		</form>
  </div>

</div>
</body>
</html>
