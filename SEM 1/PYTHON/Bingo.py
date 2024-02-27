s1=input("Enter a string=");
s=s1.split()
s.sort(key=len,reverse=True)
print("Length of the longest word=",len(s[0]))
if(len(s[0])==len(s[1])):
    print("BINGO")
