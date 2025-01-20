import math

a = int(input("Enter the value of a:-"))
b = int(input("Enter the value of b:-"))
c = int(input("Enter the value of c:-"))

# print("Your entered value is:-\n ",a,"x2",b,"x",c,"= 0")

x = int(math.pow(b,2) - 4*(a*c))

if x < 0 :
    x = -x
    x1 = str(("("+(str(-b))+"+"+"i"+"√"+"("+(str(x)))+"))"+"/"+(str(2*a)))
    x2 = str(("("+(str(-b))+"-"+"i"+"√"+"("+(str(x)))+"))"+"/"+(str(2*a)))
    print("The roots are:-\n"+x1+"\n"+x2)
else :
    d = math.sqrt(x)
    
    if d == 0:
        x1 = -b / (2*a)
        print(f"The roots are real and equal:{x1}")
    elif d >0:
        x1 = ((-b - d) / (2*a))
        x2 = (-b + d) / (2*a)
        print(f"The roots are real :{x1},{x2}")
    else:
        x1 = ((-b - d) / (2*a))
        x2 = (-b + d) / (2*a)
        print("The roots are imaginary.")