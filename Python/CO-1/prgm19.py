nums = list(map(int, input("Enter Numbers : ").split()))
odd_nums = [x for x in nums if x % 2 != 0]
print("Odd Numbers : ", odd_nums)
