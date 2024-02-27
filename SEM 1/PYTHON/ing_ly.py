s=input("Enter a string=")
l=len(s)
if s.lower().endswith('ing'):
    s+='ly'
    print(s)
else:
    s+='ing'
    print(s)
