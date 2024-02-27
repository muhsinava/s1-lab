l=[2,6,9,1,0,56689]
integers=list(map(lambda x:x+x*0.1 if x>1000 else x+x*0.5,l))
print(integers)
