list1 = input("Enter first color list : ").split()
list2 = input("Enter second color list : ").split()
print("Colors in list1 but not in list2: ", set(list1) - set(list2))

