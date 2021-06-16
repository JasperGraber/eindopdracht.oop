<?php

class Limousine extends Vehicle
{
    // Define variables.
    private $HasMinibar;

    // Construct function.
    public function __construct($brand, $model, $buildYear, $licensePlate, $needsCleaning, $milage, $isAvailable, bool $hasMinibar)
    {
        parent::__construct($brand, $model, $buildYear, $licensePlate, $needsCleaning, $milage, $isAvailable);
        $this->HasMinibar = $hasMinibar;
    }

    // Price function.
    public function Price(float $distance)
    {
        if ($this->HasMinibar == true) {
            $price = 450 + $distance * 3 + 65;
        } else {
            $price = 450 + $distance * 3;
        }
        return round($price,2);   
    }

    // String function.
    public function __toString()
    {
        return
            parent::__toString() .
            "<br> HasMinibar: " . (boolval($this->HasMinibar) ? 'yes' : 'no');
    }
}
