def even(l):
    for i in l:
      if(i==237):
        return
      elif(i%2==0):
        print(i)

l=input("Enter collection of integers=")
l=list(map(int,l.split()))
even(l)
