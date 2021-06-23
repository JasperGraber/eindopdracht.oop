from administration import Administration
from limousine import Limousine
from truck import Truck

admin = Administration()

mercedes = Limousine("Mercedes", "A-Class", 2018, "abc-123", False, 58891.7, True, True)
ford = Truck("Ford", "F-150", 2015, "123-abc", True, 118723.4, False, False)
dodge = Truck("Dodge", "RAM 1500", 2019, "def-456", False, 46218.8, False, True)

print("\n\033[1mVoertuigen toevoegen:\033[0m")
print(admin.AddVehicle(mercedes))
print(admin.AddVehicle(ford))
print(admin.AddVehicle(dodge))

print("\n\033[1mToegevoegde voertuigen lijst:\033[0m")
admin.IndexVehicle()

print("\n\033[1mTeruggebrachte voertuigen verwerken:\033[0m")
print(admin.ReturnVehicle(mercedes, False, 156.3))
print(admin.ReturnVehicle(ford, True, 89.1))
print(admin.ReturnVehicle(dodge, False, 35.7))

print("\n\033[1mVoertuigen verhuren:\033[0m")
print(admin.RentVehicle(mercedes))
print(admin.RentVehicle(ford))
print(admin.RentVehicle(dodge))