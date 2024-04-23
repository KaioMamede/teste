

def caracter(args):
    if arg <= 0:
        resp = "N - negativo ou zero"
    else:
        resp = "´P - positivo"
    return resp

resp = str("")

arg = int(input("Informe o argumento (Númerico inteiro)...:"))
resp = caracter(arg)
print(f'Argumento {arg} é tipo : {resp} ')