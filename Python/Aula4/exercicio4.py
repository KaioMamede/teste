#faça um programa que verifique se uma letra digitada é vogal ou consoante
#a) A letra deve ser inserida na variável como maiúscula (variável.Upper())
# b) Utilizar variável.isalpha()
# c) Utilizar elif (else-if)

letra = input("Informe uma letra vogal:")
letram = letra.upper()

if letram.isalpha():
    if letram =="A":
        print("Vogal")
    elif letram == "E":
        print("Vogal")
    elif letram == "I":
        print("Vogal")
    elif letram == "O":
        print("Vogal")
    elif letram == "U":
        print("Vogal")
        print("Insira uma letra ou consoante")
    else:
        print("Consoante")
else:
    print("Não é uma letra!")