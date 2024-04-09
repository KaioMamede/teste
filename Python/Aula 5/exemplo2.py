#faça um algoritmo que calculee mostre a media entre duas notas de 10 alunos.Use a 
#estrutura de repetição enquanto (while) 

contador = 1
#enquanto
while contador <=10:
    nota1 = float(input("Digite a primeira nota: "))
    nota2 = float(input("Digite a segunda nota: "))
    media = (nota1 + nota2)/2
    print("A média é %.2f" %media)
    contador = contador +1 
