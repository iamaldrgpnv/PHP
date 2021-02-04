<?php

require_once 'Item.php';
class ItemStorage
{
	private $items = [];

	// добавление товара в хранилище
	public function add_item(Item $item)
	{
		$this->items[$item->getId()] = $item;
	}

	// написать реализацию следующих методов
	public function get_by_id(int $id)
	{
		// возвращает товар по id
		return $this->items[$id];
	}

	public function get_by_title(string $title)
	{
		//   возвращает товар по названию (title)
		foreach($this->items as $item){
			if($item->getTitle() === $title) return $item;
		}
		
	}

	public function get_by_price(int $price_from, int $price_to)
	{
		// возвращает товары, стоимость которых находится в диапазоне от $price_from до $price_to
		$array = [];
		foreach($this->items as $item) if($price_from < $item->getPrice() && $item->getPrice() < $price_to) $array[] = $item;
		return $array;	
	}

	public function get_by_material(...$materials)
	{
		// возвращает товары, которые изготовлены из материалов, перечисленных в $materials,
		// например
		// при вызове в метод передаются ->get_by_material('дерево', 'железо', 'пластик');
		// значит метод должен вернуть все товары, сделанные из дерева, железа или пластика
		$array = [];
		foreach($this->items as $item){
			foreach($materials as $material){
				if($item->getMaterial() === $material) $array[] = $item;
			}
		}
		return $array;
	}

	public function get_by_price_and_material(int $price_to, string $material)
	{
		// возвращает товары, стоимость которых не превышает $price_to и
		// материал, из которого изготовлен товар соответствует $material
		$array = [];
		foreach($this->items as $item){
			if($item->getPrice() <= $price_to && $item->getMaterial() === $material) $array[] = $item;
		}
		return $array;
	}
}

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
