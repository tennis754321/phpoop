<?php
require_once "Car.php";

//create a class inheriting Car class
class Test extends Car {

    //override/replace the function with the same name from parent class
    public function getColor() {

        $this->getPrivate();
        return "Orange";
    }
}