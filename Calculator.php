<?php

class Calculator {
    public $num1;
    public $symbol;
    public $num2;

    public function setValues($num1, $symbol, $num2) {
        $this->num1 = $num1;
        $this->symbol = $symbol;
        $this->num2 = $num2;
    }

    public function getNum1() {
        return $this->num1;
    }

    public function getSymbol() {
        return $this->symbol;
    }

    public function getNum2() {
        return $this->num2;
    }

    public function getTotal() {
        if($this->symbol=="+"){
            return $this->num1+$this->num2;
        }
        elseif($this->symbol=="-"){
            return $this->num1-$this->num2;
        }
        elseif($this->symbol=="*"){
            return $this->num1*$this->num2;
        }
        elseif($this->symbol=="/"){
            return $this->num1/$this->num2;
        }
    }
}