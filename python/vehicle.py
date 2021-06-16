from dataclasses import dataclass

@dataclass
class Vehicle:

    # Attributes. 
    brand : str
    model : str
    buildyear : int
    licenseplate : str
    needscleaning : bool
    milage : float
    isavailable : bool

    # Rent vehicle function.
    def RentVehicle(self):
        if self.isavailable == True:
            self.isavailable = False
            return "Voertuig is nu verhuurd."
        else:
            return "Voertuig is niet beschikbaar."

    # Return vehicle function.
    def ReturnVehicle(self, vehicle, needscleaning, distance):
        if self.isavailable == False:
            self.isavailable = True
            self.needscleaning = needscleaning
            self.milage += distance
            return f"Voertuig is teruggebracht. Totale afstand: {self.milage}km. Prijs: {vehicle.Price(distance)}"
        else:
            return "Voertuig is al teruggebracht."

    # To string function.   
    def __str__(self):
        return f"Merk: {self.brand} \nModel: {self.model} \nBouwjaar: {self.buildyear} \nKenteken: {self.licenseplate} \nSchoon: {self.needscleaning} \nKilometerstand: {self.milage}km \nBeschikbaar: {self.isavailable}"
