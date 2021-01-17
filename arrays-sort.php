<?php 
$items = [
     [
         'title' => 'Телефон',
         'price' => 100000,
         'count' => 4
     ],
     [
         'title' => 'Часы',
         'price' => 500000,
         'count' => 2
     ],
     [
         'title' => 'Кольцо',
         'price' => 80000,
         'count' => 10
     ],
     [
         'title' => 'Браслет',
         'price' => 120000,
         'count' => 7
     ],
     [
         'title' => 'Галстук',
         'price' => 8000,
         'count' => 50
	  ],
	  [
		'title' => 'Аппликация',
		'price' => 8000,
		'count' => 50
	  ]
 ];

// 1. Для сортировки многомерного массива подходит функция usort
// usort($array, 'sort-function') 
// В функцию передается несколько аргументов, сравнивая которые функция удлаяет индексы и создает новые
// function sort-function($a, $b){
//  	if($a === $b) return 0;
//	   return $a < $b? -1 : 1;
//}
function sort_price($a, $b){
	if($a['price'] === $b['price']) return $a['title'] < $b['title']? -1 : 1;
	return $a['price'] > $b['price']? 1 : -1;
	// Заменить подобное можно оператором <=> 7.0+
	// return $a['price'] <=> $b['price'];
}
usort($items, 'sort_price');
var_dump($items);

// 2. Универсализация функции полезна, чтобы не перепсывать key внутри функции
// Делается всё через анонимную функцию внутри основной функции. Поменяется передача функции(аргумент) в usort
function sort_price_2($key){
	return function($a, $b) use ($key) {
		return $a[$key] <=> $b[$key];
	};
}
// usort($items, sort_price_2('price'));
// var_dump($items);

// 3. Сортирока одномерного массива функцией usort, sort
$nums = range(-10, 10); // Создание массива в промежутке от -10, 10
shuffle($nums); // Перемешивание значений массива
// sort($nums); // Сортирока одномерного массива функцией sort
function number_sort($a, $b){
	if($a === $b) return 0;
	return $a < $b? -1 : 1;
}
usort($nums, 'number_sort');
 ?>

