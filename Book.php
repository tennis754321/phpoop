<?php

class Book {
    public $author;
    public $title;
    public $date;
    public $summary;
    public $price;
    public $quantity;

    //constructor - automatically run once you create on object
    public function __construct($name) {
        echo "Hello Word! I'm $name";
    }

    public function setValues($author, $title, $date, $summary, $price, $quantity) {
        $this->author = $author;
        $this->title = $title;
        $this->date = $date;
        $this->summary = $summary;
        $this->price = $price;
        $this->quantity =$quantity;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDate() {
        //convert the date into a php timestamp
        $myDate = strtotime($this->date);

        //convert the timestamp into a date format that you want
        $date = date("M d, Y", $myDate);
        //$date = date("m d, y", $myDate);

        //return the converted date
        return $date;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotal() {
        return $this->price * $this->quantity;
    }
}