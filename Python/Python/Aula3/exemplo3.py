#Vamos crir um programa solicite um número real, calcule e que apresentar: 
#a) o valor obsoluto; b) somente sua parte inteira; c) raiz quadrada do número absoluto;
#d) o fatorial do numero. somente codificação em Python

import math

num = float (input("Digite um numero:"))
absoluto = math.fabs(num)
inteiro = math.trunc(num)
raiz =math.sqrt(num)
fatorial = math.factorial(inteiro)
print('abs: ',absoluto, 'int: ',inteiro, 'raiz: ',raiz, 'fac: ',fatorial)

