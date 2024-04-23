def f1(x):
    for i in range(x):
        for y in range(i + 1):
            print(f'{i + 1}', end="")
        end = "\n"
        print("")
    return


x = int(9999)
fim = str("")


while fim != "fim":
    x = int(input("Informe um númeor entre 1 e 100 (0 encerra)...:"))
    if x == 0:
        fim = "fim"
    else: 
        if x > 100:
            print("Numeros válidos 1 a 100 (0 encerra). Redigite!")
        else: 
            f1(x)
            x= 9999
else:
    print ("Programa encerrado!")
    exit()