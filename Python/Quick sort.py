def quicksort(data):
    if len(data) <= 1:
        return data
    else:
        pivot = data[0]
        less = []
        greater = []
        for i in data[1:]:
            if i < pivot:
                less.append(i)
            else:
                greater.append(i)
        return quicksort(less) + [pivot] + quicksort(greater)
n = int(input("Enter the number of elements: "))
data = []
for i in range(n):
    data.append(int(input("Enter the element: ")))
    
sorted_data = quicksort(data)
print(f"Sorted array in ascending order:{sorted_data}")
