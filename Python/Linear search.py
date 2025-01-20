def linearsearch(data, key):
    flag = False
    position = 0
    for i in range(n):
        if key == data[i]:
            flag = True
            position = i+1
    if flag is True:
        print(f"The {key} is found in the given data on {position}.")
    else:
        print(f"The {key} is not found in the given data")
    
n = int(input("Enter the number of elements:-"))    
data = []
for i in range(n):
    data.append(int(input("Enter the element: ")))
key = int(input("Enter the element which you find:-"))
linearsearch(data,key)