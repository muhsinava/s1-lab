s="Suspicious"
w={}
s=s.lower()
for i in s:
    w[i]=w.get(i,0)+1
print(w)    
