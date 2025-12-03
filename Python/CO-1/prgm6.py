list1 = list(map(int, input("Enter First List: ").split()))
list2 = list(map(int, input("Enter Second List: ").split()))

print("Same Length ? ", len(list1) == len(list2))
print("Same Sum ? ", sum(list1) == sum(list2))
print("Common Values ? ", set(list1) & set(list2))
