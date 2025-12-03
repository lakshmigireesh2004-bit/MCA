word = input("Enter a Word : ")
vowels = [ch for ch in word if ch.lower() in 'aeiou']
print("Vowels: ", vowels)
