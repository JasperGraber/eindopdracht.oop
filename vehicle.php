<?php

include_once("./limousine.php");
include_once("./truck.php");

class Vehicle
{
    // Define variables.
    protected $Brand;
    protected $Model;
    protected $BuildYear;
    protected $LicensePlate;
    protected $NeedsCleaning;
    protected $Milage;
    protected $IsAvailable;

    // Constructor function.
    public function __construct(string $brand, string $model, int $buildYear, string $licensePlate, bool $needsCleaning, float $milage, bool $isAvailable)
    {
        $this->Brand = $brand;
        $this->Model = $model;
        $this->BuildYear = $buildYear;
        $this->LicensePlate = $licensePlate;
        $this->NeedsCleaning = $needsCleaning;
        $this->Milage = $milage;
        $this->IsAvailable = $isAvailable;
    }

    // Get name function.
    public function GetName()
    {
        return $this->Brand . " " . $this->Model . ", " . $this->LicensePlate;
    }

    // Return vehicle function.
    public function ReturnVehicle() {
        if ($this->IsAvailable == false) {
            $this->IsAvailable = true;
            return "<br> Vehicle <span style='font-style:italic;'>\"" . $this->GetName() . "\"</span> is returned.";
        } else {
            return "<br> Vehicle <span style='font-style:italic;'>\"". $this->GetName() . "\"</span> is already returned.";
        }
    }

    // Rent vehicle function.
    public function RentVehicle() {
        if ($this->IsAvailable == true) {
            $this->IsAvailable = false;
            return "<br> Vehicle <span style='font-style:italic;'>\"" . $this->GetName() . "\"</span> is rented.";
        } else {
            return "<br> Vehicle <span style='font-style:italic;'>\"". $this->GetName() . "\"</span> is already rented.";
        }
    }

    // String function.
    public function __toString()
    {
        return
            "<br> Vehicle: " . $this->GetName() .
            "<br> Brand: " . $this->Brand .
            "<br> Model: " . $this->Model .
            "<br> BuildYear: " . $this->BuildYear .
            "<br> LicensePlate: " . $this->LicensePlate .
            "<br> NeedsCleaning: " . (boolval($this->NeedsCleaning) ? 'yes' : 'no') .
            "<br> Milage: " . $this->Milage . " km" .
            "<br> IsAvailable: " . (boolval($this->IsAvailable) ? 'yes' : 'no');
    }
}
