class Time:
    def __init__(self, hour, minute, second):
        self.__hour = hour
        self.__minute = minute
        self.__second = second

    # Overloading + operator
    def __add__(self, other):
        # Add seconds, minutes, hours separately
        total_sec = self.__second + other.__second
        total_min = self.__minute + other.__minute
        total_hour = self.__hour + other.__hour

        # Handle carry over for seconds
        if total_sec >= 60:
            total_min += total_sec // 60
            total_sec = total_sec % 60

        # Handle carry over for minutes
        if total_min >= 60:
            total_hour += total_min // 60
            total_min = total_min % 60

        # Return new Time object
        return Time(total_hour, total_min, total_sec)

    # Method to display time in HH:MM:SS format
    def display(self):
        print(f"{self.__hour:02d}:{self.__minute:02d}:{self.__second:02d}")


# Example usage
t1 = Time(1, 45, 50)
t2 = Time(2, 20, 30)

t3 = t1 + t2  # Calls __add__()

print("Sum of Time:")
t3.display()