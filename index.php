<a href="./python/main.py">
    <h1>Python Version</h1>
</a>

<?php

include_once("./administration.php");

$admin = new Administration();

$mercedes = new Limousine("Mercedes", "A-Class", 2018, "abc-123", false, 58891.7, true, true);
$ford = new Truck("Ford", "F-150", 2015, "123-abc", true, 118723.4, false, false);
$dodge = new Truck("Dodge", "RAM 1500", 2019, "def-456", false, 46218.8, false, true);

echo "<br><br><span style='font-weight:bold;'>Add vehicle function:</span>";
echo $admin->AddVehicle($mercedes);
echo $admin->AddVehicle($ford);
echo $admin->AddVehicle($dodge);
echo "<br><br><span style='font-weight:bold;'>Return vehicle function:</span>";
echo $admin->ReturnVehicle($mercedes, false, 156.3);
echo $admin->ReturnVehicle($ford, true, 89.1);
echo $admin->ReturnVehicle($dodge, false, 35.7);
echo "<br><br><span style='font-weight:bold;'>Vehicle list function:</span>";
echo $admin->IndexVehicle();
echo "<br><br><span style='font-weight:bold;'>Rent vehicle function:</span>";
echo $admin->RentVehicle($mercedes);
echo $admin->RentVehicle($ford);
echo $admin->RentVehicle($dodge);