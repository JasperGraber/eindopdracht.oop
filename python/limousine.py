from dataclasses import dataclass
from vehicle import Vehicle

@dataclass
class Limousine(Vehicle):

    # Attributes.   
    minibar : bool

    # Calculate price function.   
    def Price(self, distance):
        if self.minibar == True:
            price = 450 + distance * 3 + 65
        else:
            price = 450 + distance * 3
        return round(price, 2)

    # To string function.
    def __str__(self):
        return f"{super().__str__()}\nMinibar: {self.minibar}"
    