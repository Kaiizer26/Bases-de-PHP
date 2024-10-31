<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulaire</h1>
    <form action="confirmation.php" method="POST">
        <div>
            <label for="nom">Votre nom</label> <!-- dans le for="mettre l'id du input" -->
            <input type="text" name="nom" id="nom" placeholder="Votre nom" maxlength="50">
        </div>
        <div>
            <label for="prenom">Votre prénom</label> <!-- dans le for="mettre l'id du input" -->
            <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" maxlength="50">
        </div>
        <div>
            <label for="telephone">Votre téléphone</label> <!-- dans le for="mettre l'id du input" -->
            <input type="tel" name="telephone" id="telephone" placeholder="Votre téléphone" maxlength="10">
        </div>
        <div>
            <label for="email">Votre adresse email</label> <!-- dans le for="mettre l'id du input" -->
            <input type="email" name="email" id="email" placeholder="Votre email">
        </div>
        <div>
            <label for="codepostal">Votre cpde postal</label> <!-- dans le for="mettre l'id du input" -->
            <input type="number" name="codepostal" id="codepostal" placeholder="Votre code postal">
        </div>
        <div>
            <label for="datedenaissance">Votre Date de naissance</label> <!-- dans le for="mettre l'id du input" -->
            <input type="date" name="datedenaissance" id="datedenaissance" placeholder="Votre date de naissance">
        </div>
        <div>
            <input type="radio" name="sexe" id="femme" value="f" placeholder="Votre date de naissance" checked="checked">
            <label for="femme">Femme</label> <!-- dans le for="mettre l'id du input" -->
            <input type="radio" name="sexe" id="homme" value="m" placeholder="Votre date de naissance">
            <label for="homme">Homme</label> <!-- dans le for="mettre l'id du input" -->
        </div>
        <textarea name="commentaire" id="commentaire"></textarea>
        <select name="indicatif" id="indicatif">
            <option value="+33">+33</option>
            <option value="+33">+34</option>
            <option value="+33">+261</option>
            <option value="+33">+233</option>
        </select>
        <input type="submit" value="envoyer">
    </form>

    <form action="confirmation.php" method="GET">
        <div>
            <label for="nom">Votre nom</label> <!-- dans le for="mettre l'id du input" -->
            <input type="text" name="nom" id="nom" placeholder="Votre nom" maxlength="50">
        </div>
        <div>
            <label for="prenom">Votre prénom</label> <!-- dans le for="mettre l'id du input" -->
            <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" maxlength="50">
        </div>
        <div>
            <label for="telephone">Votre téléphone</label> <!-- dans le for="mettre l'id du input" -->
            <input type="tel" name="telephone" id="telephone" placeholder="Votre téléphone" maxlength="10">
        </div>
        <div>
            <label for="email">Votre adresse email</label> <!-- dans le for="mettre l'id du input" -->
            <input type="email" name="email" id="email" placeholder="Votre email">
        </div>
        <div>
            <label for="codepostal">Votre cpde postal</label> <!-- dans le for="mettre l'id du input" -->
            <input type="number" name="codepostal" id="codepostal" placeholder="Votre code postal">
        </div>
        <div>
            <label for="datedenaissance">Votre Date de naissance</label> <!-- dans le for="mettre l'id du input" -->
            <input type="date" name="datedenaissance" id="datedenaissance" placeholder="Votre date de naissance">
        </div>
        <div>
            <input type="radio" name="sexe" id="femme" value="f" placeholder="Votre date de naissance" checked="checked">
            <label for="femme">Femme</label> <!-- dans le for="mettre l'id du input" -->
            <input type="radio" name="sexe" id="homme" value="m" placeholder="Votre date de naissance">
            <label for="homme">Homme</label> <!-- dans le for="mettre l'id du input" -->
        </div>
        <textarea name="commentaire" id="commentaire"></textarea>
        <select name="indicatif" id="indicatif">
            <option value="+33">+33</option>
            <option value="+33">+34</option>
            <option value="+33">+261</option>
            <option value="+33">+233</option>
        </select>
        <input type="submit" value="envoyer">
    </form>
</body>

</html>