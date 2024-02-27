f1=False

try:
 f1=open("file1.txt")
 l=(f1.readlines())
 print(len(l))
 
except Exception as e:
    print(e)

finally:
    if f1:
        f1.close()
