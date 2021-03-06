<?php

class Truck extends Vehicle 
{
    // Define variables.
    private $HasTowRope;

    // Construct function.
    public function __construct($brand, $model, $buildYear, $licensePlate, $needsCleaning, $milage, $isAvailable, bool $hasTowRope)
    {
        parent::__construct($brand, $model, $buildYear, $licensePlate, $needsCleaning, $milage, $isAvailable);
        $this->HasTowRope = $hasTowRope;
    }

    // Price function.
    public function Price(float $distance)
    {
        if ($this->HasTowRope == true) {
            $price = 950 + $distance * 0.15 + 50;
        } else {
            $price = 950 + $distance * 0.15;
        }
        return round($price,2);      
    }

    // String function.
    public function __toString()
    {
        return 
        parent::__toString() . 
        "<br> HasTowRope: " . (boolval($this->HasTowRope) ? 'yes' : 'no');
    }
}