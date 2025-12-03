words = input("Enter words separated by space: ").split()
longest = max(words, key=len)
print("Longest word is :", longest, "with length", len(longest))
