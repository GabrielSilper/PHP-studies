<?php
class Car {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    function getColor(){
        return $this->color;
    }
}