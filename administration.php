<?php

include_once("./vehicle.php");

class Administration
{
    // Define variables.
    private $Vehicles = [];

    // Add vehicle function.
    public function AddVehicle($vehicle)
    {
        if ($this->FindVehicle($vehicle->GetLicensePlate()) == true) {
            array_push($this->Vehicles, $vehicle);
            return "<br> Vehicle <span style='font-style:italic;'>\"" . $vehicle->GetName() . "\"</span> is added to the system.";
        } else {
            return "<br> Vehicle <span style='font-style:italic;'>\"" . $vehicle->GetName() . "\"</span> already exists in the system.";
        }
    }

    // Return vehicle function.
    public function ReturnVehicle($vehicle, $needsCleaning, $distance)
    {
        return $vehicle->ReturnVehicle($vehicle, $needsCleaning, $distance);
    }

    // Index vehicle function.
    public function IndexVehicle()
    {
        $i = 1;
        foreach ($this->Vehicles as $vehicle) {
            echo "<br> (" . $i . ") " . $vehicle->GetName();
            $i++;
        }
    }

    // Rent vehicle function.
    public function RentVehicle($vehicle)
    {
        return $vehicle->RentVehicle();
    }

    // Find vehicle function.
    public function FindVehicle($licensePlate)
    {
        foreach ($this->Vehicles as $vehicle) {
            if ($licensePlate == $vehicle->GetLicensePlate()) {
                return false;
            }
        }
        return true;
    }
}
