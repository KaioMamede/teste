#crie um programa que leia uma string e imprima a inversa dela.

string = input ("Digite um texto: ")
inversa = ""
for x in string:
    inversa = x + inversa
    print(inversa)
    
    