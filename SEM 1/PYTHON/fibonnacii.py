n=int(input("Enter number\n"))
a,b=0,1
for i in range(1,n):
    a,b=b,a+b
print(n,'th element',a)

