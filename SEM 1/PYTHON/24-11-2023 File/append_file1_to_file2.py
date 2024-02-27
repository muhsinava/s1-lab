#file1 opened in read mode
f1=open("file1.txt")
s1=f1.read()   #file1 readed and stored all contents in s1

f2=open("file2.txt","a+")  #file opened in append mode
f2.write(s1)   #contents in s1 is written into file2

f2.seek(0,0)   #move the handler to beginning of file
print(f2.read()) #print the writings of file
