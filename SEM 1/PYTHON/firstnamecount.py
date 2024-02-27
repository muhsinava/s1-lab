name=input("Enter first names=")
namelist=name.split(',')
count=0
for i in namelist:
    if i[0]=='a' or i[0]=="A":
        count=count+1;
print("count is \n",count)
