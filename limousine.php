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

    public function Price(bool $distance)
    {
        return get_class($this);
    }

    // String function.
    public function __toString()
    {
        return
            parent::__toString() .
            "<br> HasMinibar: " . (boolval($this->HasMinibar) ? 'yes' : 'no');
    }
}
