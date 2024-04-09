#faça um programa em Python que solicite um numero decimal, faça a conversão e exiba
#o numero digitado na base binaria. Use a estrutura de repetição while.

num = int(input("Digite um numero inteiro: "))

binario=""
while num!=0:
    r= num%2 #(%2) Divide a variavel por 2 e obtém o resto
    binario = str(r) + binario
    num = num//2 #(//) Ultiliza somente a parte inteira da divisão
print(binario) 