n=input("Enter a list of numbers=")
s=n.split(",")
r=[i for i in s if int(i)%2==0]
print(r)
