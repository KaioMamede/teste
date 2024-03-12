#tento como dado de entrada a altura (h) de uma pessoa, construa um algoritmo que calcule seu peso ideial
#utilizando as seguintes fórmulas

h = float(input("informe sua altura..........:"))
s = input("informe o seu genero (M) ou (F): ").upper()

#Para homens: (72.7*h) -58
if s == 'M':
    pi = float((72.7*h)-58)
    print(f'o peso ideal para a altura de {h} é de: {pi}')
else:
    #Para mulheres: (62.1 * h) -44.7
    if s == 'F':
        pi = float((62.1 * h) -44.7)

        print(f'o peso ideal para a altura de {h} é de: {pi}')
    else: 
        print(f'''O Gênero {s} é invalido!!!!''')