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

    // String function.
    public function __toString()
    {
        return 
        parent::__toString() . 
        "<br> HasTowRope: " . (boolval($this->HasTowRope) ? 'yes' : 'no');
    }
}