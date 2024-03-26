n1 = int(input("Informe o primeiro numero inteiro"))
n2 = int(input("Informe o segundo numero inteiro"))
n3= int(input("Informe o terceiro numero inteiro"))
if n1 == n2 and n1 == n3:
    print(f'Números iguais {n1}, {n2}, {3}')
else:
    if n1 > n2:
        if n1> n3:
            print(f"Primeiro número {n1}, é o maior numero digitado {n2}, {n3} ")
        else:
            print(f"Primeiro número {n3}, é o maior numero digitado {n1}, {n2} ")
    else:
         if n2 > n3:
            print(f"Primeiro número {n2}, é o maior numero digitado {n1}, {n3} ")   
         else:
            print(f"Terceiro numero {n3}, é maior numeor digitao {n1}, {n2}")
    