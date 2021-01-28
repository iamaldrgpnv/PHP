<?php
session_start();
$login = $_SESSION['login'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Страница</title>
</head>
<body>
	<nav>
		<?php if(isset($login)): ?>
		<a href="logout.php">Выйти</a>
		<?php else: ?>
		<a href="form.php">Войти</a>
		<?php endif; ?>
	</nav>
	<h2>Контент доступен всем пользователям</h2>
	<div id="section"></div>
	<?php if(isset($login)): ?>
	<form>
			<textarea name="text" id="comment" cols="30" rows="10"></textarea>
			<button id="add-button" type="submit">Отпарвить</button>
	</form>
	<?php endif; ?>
	<script src="js/main.js"></script>
</body>
</html>