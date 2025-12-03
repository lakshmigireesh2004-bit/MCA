class Rectangle:
    def __init__(self, length, width):
        # private attributes
        self.__length = length
        self.__width = width

    def area(self):
        return self.__length * self.__width

    # Overload < operator
    def __lt__(self, other):
        return self.area() < other.area()


# Creating two Rectangle objects
r1 = Rectangle(10, 5)
r2 = Rectangle(8, 8)

# Compare the rectangles using overloaded '<'
if r1 < r2:
    print("Rectangle 1 is smaller than Rectangle 2")
else:
    print("Rectangle 1 is not smaller than Rectangle 2")