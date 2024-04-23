def somaImposto(taxaImposto, custo):
    custoTotal = round(float(custo + (taxaImposto/100) + custo),2)
    return


fim = str("")

taxaImposto = float(0)
custo = float(0)
custoTotal = float(0)
fim = str("")

while fim !="fim":
    taxaImposto = float(input("Informe a taxa de imposto: "))
    custo = float(input("Informe o valor (custo) do produto: "))
    custoTotal = somaImposto(taxaImposto, custo)
    print(f'custo total do produto = {custoTotal}')
    fim = str(input("Continua (tecla enter) ou Encerra (digite fim): "))
exit()
