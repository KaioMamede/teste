nota1 = float(input("Informe a primeira nota: "))
nota2 = float(input("Informe a segunda nota: "))

if nota1 > 10.0:
    print(f'nota 1 invalida {nota2}')
else: 
    media = ((nota1 + nota2)/2)
    if media == 10.0:
            print(f'Aluno aprovado com distinção. {media}')
    else:
        if media <7.0:
            print(f'aluno aprovado {media}')
        else:
            print(f'aluno aprovado {media}')
    
15
