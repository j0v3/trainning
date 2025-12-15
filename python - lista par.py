number = [x for x in range(100)]
newList = []

for x in number:
    if x % 2 == 0:
        newList.append(x)

print(newList)