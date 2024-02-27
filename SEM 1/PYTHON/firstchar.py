n=input("Enter a string=")
first=n[0]
new=first+n[1:].replace(first,'&')
print(new)
