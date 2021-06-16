from dataclasses import dataclass
from dataclasses import dataclass
from vehicle import Vehicle

@dataclass
class Truck(Vehicle):

    # Attributes. 
    towrope : bool

    # Calculate price function.   
    def Price(self, distance):
        if self.towrope == True:
            price = 950 + distance * 0.15 + 50
        else:
            price = 950 + distance * 0.15
        return round(price, 2) 

    # To string function.
    def __str__(self):
        return f"{super().__str__()}\nSleeptouw: {self.towrope}"