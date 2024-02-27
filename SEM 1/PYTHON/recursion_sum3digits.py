num=int(input("Enter a 3 digit number="))
x=num

def sum_digits(x):
    if not x//10:return x
    else:
        return x%10+sum_digits(x//10)

print(sum_digits(x))
