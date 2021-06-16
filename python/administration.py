from dataclasses import dataclass
from vehicle import Vehicle

@dataclass
class Administration:
    
    # Rent vehicle function.
    def RentVehicle(self, vehicle):
        return vehicle.RentVehicle()

    # Return vehicle function.
    def ReturnVehicle(self, vehicle, needscleaning, distance):
        return vehicle.ReturnVehicle(vehicle, needscleaning, distance)
