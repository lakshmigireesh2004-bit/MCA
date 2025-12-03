import math
start = 1000
end = 9999
result = []

for num in range(start, end+1):
 if all(int(d)%2==0 for d in str(num)):
  if int(math.isqrt(num))**2 == num:
    result.append(num)

print("Numbers are:", result)
