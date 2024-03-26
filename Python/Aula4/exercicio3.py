#Faça um programa que verifique se uma letra digitada é "f" ou "m".
#Conforme a letra escrever; f - feminio, M - masculino, sexo invalido

sexo = input("Digite F(Feminino) M(masculino): ")
sexo.upper()

if sexo =="F":
    print("sexo feminino")
elif sexo == "M":
    print("Sexo masculino")
else:
    print("Sexo invalido")