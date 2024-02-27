n=int(input("Enter a number="))
word=input("Enter a list of words=")
sp=word.split()
for i in sp:
    l=len(i)
    if(l>n):
        print(i)
