class Rectangle:
    def __init__(self, length, breadth):
        self.length = length
        self.breadth = breadth

    def area(self):
        return self.length * self.breadth

    def perimeter(self):
        return 2 * (self.length + self.breadth)


# Create two rectangle objects
r1 = Rectangle(5, 3)
r2 = Rectangle(4, 6)

# Display area and perimeter
print("Rectangle 1 - Area:", r1.area(), "Perimeter:", r1.perimeter())
print("Rectangle 2 - Area:", r2.area(), "Perimeter:", r2.perimeter())

# Compare rectangles by area
if r1.area() > r2.area():
    print("Rectangle 1 is larger than Rectangle 2")
elif r1.area() < r2.area():
    print("Rectangle 2 is larger than Rectangle 1")
else:
    print("Both rectangles have the same area")