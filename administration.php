<?php

include_once("./vehicle.php");

class Administration
{
    // Define variables.
    private $Vehicles = [];

    // Add vehicle function.
    public function AddVehicle($vehicle)
    {
        // if ($vehicle->GetLicensePlate()) {
        array_push($this->Vehicles, $vehicle);
        return "<br> Vehicle <span style='font-style:italic;'>\"" . $vehicle->GetName() . "\"</span> is added to the system.";
        // } else {
        //     return "<br> Vehicle \"" . $vehicle->GetLicensePlate() . "\" already exists in the system.";
        // }
    }

    // Return vehicle function.
    public function ReturnVehicle($vehicle, $needsCleaning, $distance)
    {
        echo $vehicle->ReturnVehicle($vehicle, $needsCleaning, $distance);
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
        echo $vehicle->RentVehicle();
    }
}
