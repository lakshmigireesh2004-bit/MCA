current_year = int(input("Enter The Current Year : "))
final_year = int(input("Enter The Final Year : "))

print("Leap Years Between", current_year, "and", final_year, "are : ")
for year in range(current_year, final_year + 1):
	if (year % 4 == 0 and year % 100 != 0) or (year % 400 == 0):
		print(year)
