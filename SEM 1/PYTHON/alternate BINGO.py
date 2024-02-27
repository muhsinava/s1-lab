s=input("Enter a string=")
r=[x for x in s if len(x)==len(max(s))]
if len(r)>1:
    print("BINGO")
