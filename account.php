<?php
session_start();
if(!isset($_SESSION['login'])) {
	header('Location: form.php');
}
$login = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
</head>
<body>
	<nav>
		<a href="main.php">Страница</a>
		<a href="logout.php">Выйти</a>
	</nav>
	<h2><?php echo $login?>, Добро пожаловать в личный кабинет</h2>
</body>
</html>