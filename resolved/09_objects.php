<?php

/* Create a class called Car with a constructor that receives the brand and make year of the car, and a function called print_details that prints out the details of the car.

For example, for a 2006 Toyota car, the following line would be printed out:

This car is a 2006 Toyota. */


// TODO: Implement the Car class here

class Car {
    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function print_details() {
        echo "This car is a $this->year $this->brand.";
    }
}

$car = new Car("Toyota", 2006);
$car->print_details();

?>
