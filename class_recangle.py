class rectangle():
    def __init__(self,length=6, breadth=4):
        self.length=length
        self.breadth=breadth
    def area(self):
        return self.breadth*self.length
    def perimeter(self):
        return (self.length+self.breadth)*2
    
    
a=int(input("Enter length of rectangle : "))
b=int(input("Enter breadth of rectangle : "))
ob=rectangle(a,b)
print("Area of rectangle : ",ob.area())
print("Perimeter of rectangle : ",ob.perimeter())