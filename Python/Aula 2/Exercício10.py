#Faça um programa que peça a temperatura em graus Celsius, tranforme e mostre em graus fehrenheit


nf = float(input("Qual a temperatura de Celsius: "))
c = round (float ((nf*1.8+32)))     

#print("temperada em celsus é: ", c, "°c")
print(f''' A temperatura fahrenheit {nf} em celsius é {c}ºC''')