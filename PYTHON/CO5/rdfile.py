f = open("myfile.txt", "r")
lines = []
for line in f:
    lines.append(line.strip())
print(lines)
f.close()