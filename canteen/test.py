class Product:
    def __init__(self,name,price):
        self.name=name
        self.price=price
    def __add__(self,other):
        if self.price>other.price:
            return self.price
        return other.price

p1=Product('Iphone',1000)
p2=Product('Samsung',500)
print(p1+1000)