<?php
session_start();
require('dbconnect.php');
if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	
} else {
	// ログインしていない
	
}
// 投稿を記録する
if (!empty($_POST)) {
	if ($_POST['message'] != '') {
		
	}
}
// 投稿を取得する

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ひとこと掲示板</title>

	<link rel="stylesheet" href="style.css" />
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>ひとこと掲示板</h1>
  </div>
  <div id="content">
		<form action="" method="post">
		<dl>
			<dt><?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>さん、メッセージをどうぞ</dt>
		<dd>
		<textarea name="message" cols="50" rows="5"></textarea>
		</dd>
		</dl>
		<div>
		<input type="submit" value="投稿する" />
		</div>
		</form>

		<?php
		foreach ($posts as $post):
		?>
		<div class="msg">
			<img src="member_picture/me.jpg" width="48" height="48" alt="" />
			<p>書き換える<span class="name">(kakikaeru)</span></p>
			<p class="day">2020/07/29 2:11</p>
		</div>
		<?php
		endforeach;
		?>
  </div>

</div>
</body>
</html>
