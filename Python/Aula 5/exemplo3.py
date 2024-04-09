#faça um algortimo qua calcule e mostre a média de uma quantidade indeterminada de 
#numero inteiros digitados pelo úsuario. Use a estrutura de repetição enquando (While)



contador = 0
soma = 0 
resp = "s"

#+= repetição da variavel

while resp == "s" or resp == "S":
    num = float(input("Digite um numero: "))
    soma = soma + num
    contador = contador + 1
    resp = input("Deseja continuar (S/N)? ")

media = soma/contador
print("A média dos números digitados é %.2f" %media)