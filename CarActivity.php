<?php

class CarActivity {

    //set the properties
    public $brand;
    public $model;
    public $color;

    //create the to set the values for the properties
    public function setValues($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }
    public function getDate() {
        //convert the date into a php timestamp
        $myDate = strtotime($this->date);

        //convert the timestamp into a date format that you want
        $date = date("M d, Y", $myDate);

        //return the converted date
        return $date;
    }
}