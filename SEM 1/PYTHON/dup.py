n=input("Enter list of numbers seperated by coma=")
r1=n.split(',')
r=[]
for i in r1:
    if(i not in r):
        r.append(i)
print(r)        
       
        
