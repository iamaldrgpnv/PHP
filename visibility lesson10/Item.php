<?php
class Item
{
	// значения свойств title и id должны задаваться через конструктор,
	// добавить все необходимые геттеры и сеттеры

	private $id; // не может быть отрицательным или 0
	private $title; // максимум 15 символов
	private $price; // не может быть отрицательным или 0
	private $material; // минимум 3 символа

	public function set_id(string $id)
	{
		if ($id <= 0) {
			throw new InvalidArgumentException('Не может быть отрицательным или 0');
		}
		return $this->id = $id;
	}
	public function set_title(string $title)
	{
		if (strlen($title) > 15) {
			throw new InvalidArgumentException('Максимум 10 символов');
		}
		return $this->title = $title;
	}
	public function set_price(int $price)
	{
		if ($price <= 0) {
			throw new InvalidArgumentException('Не может быть отрицательным или 0');
		}
		return $this->price = $price;
	}
	public function set_material(string $material)
	{
		if (strlen($material) < 3) {
			throw new InvalidArgumentException('Минимум 3 символа');
		}
		return $this->material = $material;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getPrice()
	{
		return $this->price;
	}
	public function getMaterial()
	{
		return $this->material;
	}
	public function getProp($prop)
	{
		return $this->$prop;
	}
	public function __construct(int $id, string $title)
	{
		if ($id <= 0 || 15 < strlen($title)) throw new InvalidArgumentException('Проверьте корректность данных');
		$this->id = $id;
		$this->title = $title;
	}
}
