from dataclasses import dataclass
from vehicle import Vehicle

@dataclass
class Administration:

    Vehicles = []

    # Add vehicles function.
    def AddVehicle(self,vehicle):
        if self.FindVehicle(vehicle.GetLicensePlate()) == True:
            self.Vehicles.append(vehicle)
            return "Voertuig is toegevoegd."
        else:
            return "Voertuig bestaat al."

    # Rent vehicle function.
    def RentVehicle(self, vehicle):
        return vehicle.RentVehicle()

    # Return vehicle function.
    def ReturnVehicle(self, vehicle, needscleaning, distance):
        return vehicle.ReturnVehicle(vehicle, needscleaning, distance)

    # Vehicles list function.
    def IndexVehicle(self):
        i = 1
        for vehicle in self.Vehicles:
            print(f"({i}) {vehicle.GetName()}")
            i = i + 1

    # Find vehicle function.
    def FindVehicle(self, licenseplate):
        for vehicle in self.Vehicles:
            if licenseplate == vehicle.GetLicensePlate():
                return False
        return True   
