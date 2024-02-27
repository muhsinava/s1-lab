n=[9,-2,8,3,-3,4]
p=[i for i in n if i>0]
print("a list of positive numbers from list\n\t",n,"is",p)
s=[i*i for i in n]
print("b.square of numbers in list\n\t",n,"is",s)
word="Aristotle"
wordlist=list(word)
vowels=[i for i in wordlist if i=='a' or i=='e' or i=='i' or
        i=='o' or i=='u' or i=='A' or i=='E' or i=='I' or i=='O' or i=='U']
print("c.list of vowels in ", word,"is",vowels)
addnum=[i for i in n if i%2!=0]
print("d.list of odd numbers from list",n,"is",addnum)
y=int(input("Enter a year greater than 2023="))
leap=[i for i in range(2023,y) if(i%400==0 or (i%100!=0 and i%4==0))]
print("e.list of leap year between 2023 and",y,"is\n\t",leap)
