import random
import string

def generer_mot_de_passe(type_choisi, longueur):
    if type_choisi == "1":
        caracteres = string.ascii_letters  # Majuscules + minuscules
    elif type_choisi == "2":
        caracteres = string.ascii_letters + string.digits
    elif type_choisi == "3":
        caracteres = string.ascii_letters + string.digits + string.punctuation
    else:
        print("Choix invalide.")
        return None

    mot_de_passe = ''.join(random.choice(caracteres) for _ in range(longueur))
    return mot_de_passe

def main():
    print("Quel type de mot de passe souhaitez-vous générer ?")
    print("1 - Alphabétique seulement")
    print("2 - Alphabétique et numérique")
    print("3 - Alphabétique, numérique et caractères spéciaux")

    choix = input("Entrez votre choix (1, 2 ou 3) : ")

    try:
        longueur = int(input("Entrez la longueur souhaitée du mot de passe : "))
        if longueur <= 0:
            print("La longueur doit être un entier positif.")
            return
    except ValueError:
        print("Veuillez entrer un nombre valide.")
        return

    mot_de_passe = generer_mot_de_passe(choix, longueur)
    if mot_de_passe:
        print("Mot de passe généré :", mot_de_passe)

if __name__ == "__main__":
    main()
