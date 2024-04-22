<<<<<<< HEAD
<?php
class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
=======
<?php
class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
>>>>>>> e22765833210c7ed994a68d514f436d60f4db267
echo $car2->brand;