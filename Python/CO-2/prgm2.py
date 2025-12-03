n = int(input("Enter number of terms: "))
a, b = 0, 1
print("Fibonacci series:")
for _ in range(n):
  print(a, end=" ")
  a, b = b, a+b


1)
nums = list(map(int, input("Enter Numbers : ").split()))
odd_nums = [x for x in nums if x % 2 != 0]
print("Odd Numbers : ", odd_nums)


