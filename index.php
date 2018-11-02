<?php

/*
 * Инкапсуляция - отделение логики (структуры) работы от самого обетка. Например кнопка включения компютера какой мы пользуемся и
 * сама микросхема (принцып работы) над которым мы даже и не задумуемся (просто знаем результат)
 */

class Product
{
    private $name;
    private $price;
    private $discount;

    public function __construct($newName, $newPrice, $newDiscount)
    {
        $this->name = $newName;
        $this->price = $newPrice;
        $this->discount = $newDiscount;
    }

    public function getPrice()
    {
        if ($this->discount) {
            return round($this->price - ($this->price * $this->discount / 100));
        } else {
            return $this->price;
        }
    }

    public function getName()
    {
        return $this->name;
    }
}

//Class Duck
class Duck extends Product
{
    public $color = 'чорный';
}

//Object duck
$whiteDuck = new Duck('Белая утка', 50, 10);
$whiteDuck->color = 'белый';

//object duck 2
$blackDuck = new Duck('Черная утка', 55, 0);

echo $blackDuck->getPrice();
echo $blackDuck->color;
echo $blackDuck->getName();


//Class
class Car extends Product
{
    public $fuel = 'бензин';
    public $color = 'black';
}

// Objects
$bmw = new Car('bmw', 4000, 23);

$mers = new Car('mers', 4100, 0);
$mers->fuel = 'дизель';


//Class
class Pen extends Product
{
    public $color = 'blue';
}

$penOne = new Pen('just pen', 5, 0);

$penTwo = new Pen('black pen', 4, 0);
$penTwo->color = 'black';


//Class
class TvClass extends Product
{
    public $diagonal;
}

$lg = new TvClass('LG', 100, 0);
$lg->diagonal = 60;

$samsung = new TvClass('Samsung', 150, 10);
$samsung->diagonal = 64;