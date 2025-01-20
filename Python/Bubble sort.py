n = int(input("Enter the number of elements: "))
bubble = []
for i in range(n):
    bubble.append(int(input("Enter the element: ")))

print("The sorted array is: ", bubble)
for i in range(n):
    for j in range(n-i-1):
        if bubble[j] > bubble[j+1]:
            bubble[j], bubble[j+1] = bubble[j+1], bubble[j]
            
print("The sorted array is: ", bubble)