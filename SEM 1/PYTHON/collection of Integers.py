n1=input("Enter 1st collection of integer=")
n1=set(map(int,n1.split(',')))
n2=input("Enter 1st collection of integer=")
n2=set(map(int,n2.split(',')))

a=len(n1)
b=len(n2)

print("The list of same length=",a==b)
print("The sum of lists are  ",sum(n1)==sum(n2))
print("Are there any common elements=",bool(a & b))
