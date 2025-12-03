class BankAccount:
    def __init__(self, acc_no, name, acc_type, balance):
        self.acc_no = acc_no
        self.name = name
        self.acc_type = acc_type
        self.balance = balance

    def deposit(self, amount):
        self.balance += amount
        print("Amount deposited:", amount)
        print("Updated balance:", self.balance)

    def withdraw(self, amount):
        if amount > self.balance:
            print("Insufficient balance!")
        else:
            self.balance -= amount
            print("Amount withdrawn:", amount)
            print("Updated balance:", self.balance)

    def display(self):
        print("\nAccount Number:", self.acc_no)
        print("Name:", self.name)
        print("Account Type:", self.acc_type)
        print("Balance:", self.balance)



acc1 = BankAccount(101, "Rahul", "Savings", 5000)

# Display details
acc1.display()

# Deposit money
acc1.deposit(1500)

# Withdraw money
acc1.withdraw(2000)