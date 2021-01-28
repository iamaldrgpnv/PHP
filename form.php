<?php
session_start();
$server = $_SERVER;
if(isset($_SESSION['login'])) {
	header('Location: account.php');
}
if($server['REQUEST_METHOD'] === 'POST') {
	$post = $_POST;
	if(trim($post['login']) === 'qwerty' && trim($post['password']) === '123') {
		$_SESSION['login'] = $post['login'];
		$_SESSION['password'] = $post['password'];
		header('Location: account.php');
	} else {
		$error = 'Ошибка авторизации';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Форма авториации</title>
</head>
<body>
	<?php if(isset($error)) :?>
	<p><?php echo $error?></p>
	<?php endif ?>
	<form action="form.php" method="post">
		<div>
			<label for="">
				Введите логин <input type="text" name="login">
			</label>
		</div>
		<div>
			<label for="">
				Введите пароль<input type="password" name="password">
			</label>
		</div>
		<input type="submit" value="Войти">
	</form>
</body>
</html>