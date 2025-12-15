global_capitals = {
    "Afghanistan": "Kabul",
    "Argentina": "Buenos Aires",
    "Australia": "Canberra",
    "Brazil": "Brasília",
    "Canada": "Ottawa",
    "China": "Beijing",
    "Egypt": "Cairo",
    "France": "Paris",
    "Germany": "Berlin",
    "India": "New Delhi",
    "Italy": "Rome",
    "Japan": "Tokyo",
    "Mexico": "Mexico City",
    "Nigeria": "Abuja",
    "Russia": "Moscow",
    "South Korea": "Seoul",
    "Spain": "Madrid",
    "Turkey": "Ankara",
    "United Kingdom": "London",
    "United States": "Washington, D.C."
}


def getCapital():
    while True:
        print("Olá, insira o nome do país corretamente e retornaremos a capital dele, caso tenhamos em nossos registros")
        capita = input("Nome do Pais:")
        capita = capita.capitalize()

        if global_capitals.get(capita):
            print(f"\nEncontramos a sua capital, a capital do(a) {capita} é {global_capitals.get(capita)}\n")
            print("Se desejas buscar novamente só continuar abaixo, caso não, digite 'sair' para encerrar\n\n\n\n")
        elif(capita == "sair" or capita == "Sair"):
            print("\nEncerrando...\n")
            break
        else:
            print(f"\nConfira por favor o valor inserido, pode ser que estava errado ou ainda não possuímos a capital em nosso banco de dados tente novamente!\n")


getCapital()