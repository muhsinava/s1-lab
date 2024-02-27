def length(s):
    count=0
    for i in s:
        if(len(i)>=2 and i[0]==i[-1]):
            count+=1
    return count   

s=input("Enter collection of strings=")
s=s.split()
c=length(s)
print(c)
            
