<?php 
$goods = [
	[
		 'id' => 1,
		 'title' => 'Flute',
		 'price' => 20000,
		 'img' => 'flute.jpg',
		 'description' => [
			  'color' => 'white',
			  'material' => 'bamboo'
		 ]
	],
	[
		 'id' => 2,
		 'title' => 'Гитара',
		 'price' => 18000,
		 'img' => 'guitar.jpg',
		 'description' => [
			  'color' => 'brown',
			  'material' => 'linden'
		 ]
	],
	[
		 'id' => 3,
		 'title' => 'Барабан',
		 'price' => 68000,
		 'img' => 'drum.jpg',
		 'description' => [
			  'color' => 'brown',
			  'material' => 'steel'
		 ]
	],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Товары</title>
	<style type="text/css">
		table td {
			border: 1px solid black;
		}
		table {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<section>
		<?php foreach($goods as $good): ?> <!-- Перебор массива в самом html (альтернативный синтаксис)-->
			<h1>Номер товара: <?php echo $good['id'];?></h1>
			<h2>Название товара: <?php echo $good['title'];?></h2>
			<h3>Цена: <?php echo $good['price'];?></h3>
			<img src="../img/items/<?php echo $good['img'];?>" weight="200px" height="200px">
			<table>
				<?php foreach($good['description'] as $key => $value): ?> <!-- Ключи и их значение можно получить в самом foreach-->
					<!-- tr - строки td - ячейки -->
					<tr><td><?php echo $key; ?></td><td><?php echo $value; ?></td></tr>
				<?php endforeach ?>
			</table>
		<?php endforeach ?>
	</section>
</body>
</html>





