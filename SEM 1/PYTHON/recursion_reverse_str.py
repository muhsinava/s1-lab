def strrev(s):
    if not len(s):return ''
    else:
        return s[-1]+strrev(s[:-1])
s=input("Enter string=")
print(strrev(s))

