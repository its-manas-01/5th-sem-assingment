class A:
    
    def __init__(self, X):
        a=X
    def dis(self):
        print(f"The value of a is:- {self.a}")

class B(A):
    def __init__(self, X, Y):
        super().__init__(X)
        b=Y
    
    def display(self):
        c = self.b+self.a
        print(f"The sum of {self.a} and {self.b} is:- {c}")
        
        
X = int(input("Enter a value:-"))
Y = int(input("Enter another value:-"))
obj = B(X, Y)
obj.display()