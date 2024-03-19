import math
n1 = float(input("Digite um numero inteiro: "))
if n1 > 0:
    r = math.sqrt(n1) 
    print("A rais quadrada de %.2f é %.2f" % (n1,r))
else:   
    print("Em R, não há rais quadrada de numero negativo")
    
    
