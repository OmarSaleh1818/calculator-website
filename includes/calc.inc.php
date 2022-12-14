<?php

class Calc {
    public $num1;
    public $num2;
    public $calc;


    public function __construct($num1, $num2, $calc) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calc = $calc;
    }

    final public function calcMethod() {
        switch ($this->calc) {
            case 'add':
                $result = $this->num1 + $this->num2 ;
                break;
            case 'subt':
                $result = $this->num1 - $this->num2;
                break;
            case 'mult':
                $result = $this->num1 * $this->num2;
                break;
            case 'divid':
                $result = $this->num1 / $this->num2;
                break;
            case 'precent':
                $result = $this->num1 % $this->num2;
                break;   
        
            default:
                $result = "_This is Error";
                break;
        }
        return $result;
    }

}
