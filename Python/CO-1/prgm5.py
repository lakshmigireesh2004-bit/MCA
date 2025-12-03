names = input("Enter first names separted by space: ").split()
count_a = sum(name.lower() .count('a') for name in names)
print("Total Occurrence of 'a': ", count_a)
