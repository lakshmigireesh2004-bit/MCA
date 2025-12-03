import math
import datetime
import random
import statistics

print("Square root of 25:", math.sqrt(25))
print("Factorial of 5:", math.factorial(5))

today = datetime.date.today()
print("\nToday's date:", today)
print("Current year:", today.year)

print("\nRandom number between 1 and 10:", random.randint(1, 10))

data = [10, 20, 30, 40, 50]
print("\nMean of data:", statistics.mean(data))
print("Median of data:", statistics.median(data))
