f1 = open("input.txt", "r")
f2 = open("oddlines.txt", "w")
count = 1
for line in f1:
    if count % 2 == 1:
        f2.write(line)
    count += 1
f1.close()
f2.close()
print("Odd lines copied.")