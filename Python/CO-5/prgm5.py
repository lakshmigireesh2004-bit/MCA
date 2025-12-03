import csv
data = {"Name": "Rajeev", "Age": 40, "Place": "Kidangoor"}
f = open("dict.csv", "w", newline="")
writer = csv.writer(f)
for key, value in data.items():
    writer.writerow([key, value])
f.close()
f = open("dict.csv", "r")
reader = csv.reader(f)
for row in reader:
    print(row)
f.close()