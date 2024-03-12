limite_de_peso = 50 
peso = float(input("Digite o peso do peixe: "))
execesso = max(0, peso - limite_de_peso)
multa = 4.00 * execesso
print(f'Excesso de peso: {execesso} kg')
print(f'Valor da multa: R$ {multa:.2f}')