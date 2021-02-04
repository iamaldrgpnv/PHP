<?php
require_once 'Item.php';
require_once 'ItemStorage.php';
// подключить файлы Item и ItemStorage
// создать необходимые объекты, вызвать методы

$piano = new Item(1, 'Рояль');
$piano->set_price(1234);
$piano->set_material('Дерево');

$car = new Item(2, 'Машина');
$car->set_price(10000000);
$car->set_material('Железо');
$storage = new ItemStorage();

$storage->add_item($piano);
$storage->add_item($car);

var_dump('Поиск по названию', $storage->get_by_title('Рояль'));
var_dump('Поиск в диапозоне цен', $storage->get_by_price(1000, 2000));
var_dump('Поиск по материалам', $storage->get_by_material('Железо', 'Дерево'));
var_dump('Поиск по двум критериям', $storage->get_by_price_and_material(2000, 'Дерево'));
