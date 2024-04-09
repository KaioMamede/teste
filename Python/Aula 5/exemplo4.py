#faça um programa em Python que solicite um número binario
#faça a conversão e exibe o numero digitado na base decimal. Use a estrutura de repetição for
#solicita numero binario (devem ser somente composto por caracteres 0 a 1)
#Encerar o programa quando a opção de continuar for diferente de "s"
#aplicação com WHILE
#
opc = ""
#
opc = input("Continua Processo (S) ou (N): ").upper()
while opc == "S":
#
    numb = input("Digite um numero binario (Composto somente por 0 e 1):")
    li= list(numb)
    n = len(numb)
    i = int(0)
#mostra o valor digitado e inserido na lista
    for i in range(n):
        print (li[i], " ", end="")
#      
    eroo = ""
    for i in range(n):
        if (li[i] !="1") and (li[i] != "0"):
            print(f'Caracter {li[i]} não é binario!')
            exit()
#        
    i = int(0)
    numdec = 0
#
    for i in range(n):
        n = n - 1
        numdec = numdec + int(li[n])*2**i
#    
    print("\nO numero binario %s equivale a %d na base decimal. " %(numb, numdec))
    opc = input("Continua Processo (S) ou (N): ").upper()