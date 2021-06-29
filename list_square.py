list1=input("Enter list of numbers by space : ")
list1=list1.split()
for i in range(len(list1)):
    list1[i] = int(list1[i])
print("list : ", list1)
i=0
while i<len(list1):
    list1[i]=list1[i]*list1[i]
    i+=1
print("square of list : ",list1)
    