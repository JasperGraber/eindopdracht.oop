<?php

include_once("./administration.php");

$admin = new Administration();

$mercedes = new Limousine("Mercedes", "A-Class", 2018, "abc-123", false, 58891.7, true, true);
$ford = new Limousine("Ford", "F-150", 2015, "123-abc", true, 118723.4, false, false);
$dodge = new Limousine("Dodge", "RAM 1500", 2019, "def-456", false, 46218.8, false, true);

echo $admin->AddVehicle($mercedes);
echo $admin->AddVehicle($ford);
echo $admin->AddVehicle($dodge);
echo "<br>";
echo $admin->ReturnVehicle($mercedes);
echo $admin->ReturnVehicle($ford);
echo $admin->ReturnVehicle($dodge);
echo "<br>";
echo $admin->IndexVehicle();
echo "<br>";
echo $admin->RentVehicle($mercedes);
echo $admin->RentVehicle($ford);
echo $admin->RentVehicle($dodge);