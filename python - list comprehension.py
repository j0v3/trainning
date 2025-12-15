numbers = [1, 2, 3, 4, 5, 7, 9, 10, 11, 12, 13, 14, 15] 
numBers = [x for x in range(301)]


def comprehesion(listinput):
    newList = [ x for x in listinput if x % 2 != 0 ] #adiciona os impares
    return newList

newist = []

for x in numbers:
    if x % 2 == 0:
        newist.append(x)

print(comprehesion(numbers))
print(f"Lista utilizando a função com list comprehension: {comprehesion(numBers)}")
print(f"Lista usando for {newist}")