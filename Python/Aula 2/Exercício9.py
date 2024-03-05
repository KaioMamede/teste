#Faça um programa que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius.

nf = float(input("Qual a temperatura de Fahrenheit: "))
c = round (float(5*((nf-32)/9)),2)      #5*((t-32)/9)).2)

print("temperada em celsus é: ", c, "°c")
#print(f''' A temperatura fahrenheit {grausf} em celsius é {grausc}''')