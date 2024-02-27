f1=False
f2=False
try:
 f1=open("file1.txt")  #file1 opened in read mode
 s1=f1.read()       #file1 readed and stored all contents in s1       

 f2=open("file2.txt",'w+')  #file opened in write mode
 f2.write(s1)       #contents in s1 is written into file2

 f2.seek(0,0)       #move the handler to beginning of file
 print(f2.read())   #print the writings of file

except Exception as e:
    print(e)

    
finally:
    print("Program Terminated and files are closed")
    if f1:f1.close()
    if f2:f2.close()
