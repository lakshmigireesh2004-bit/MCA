import csv
f = open("C:\\Users\\CEK06\\Documents\\MCA\\PYTHON\\CO5\\data.csv", "r")
reader = csv.reader(f)
for row in reader:
    print(row[0], row[2])
f.close()