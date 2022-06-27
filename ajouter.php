<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <form method="POST" action="view/ajouter_view.php">
        <label for="nom_utilisateur">Nom utilisateur</label>
        <input type="text" name="nom_utilisateur" placeholder="Tapez votre nom " required="required" />
        <br><br><br>
        <label for="email">Nom</label>
        <input type="text" name="nom" value="" placeholder="Tapez votre nom" required="required" />
        <br><br><br>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" placeholder="Tapez votre premon " required="required" />
        <br><br><br>
        <label for="mdp">Mot De Passe</label>
        <input type="password" name="mdp" placeholder="Tapez votre Mot de passe" required="required" />
        <br><br><br>
        <!-- Boton enregistrer  -->
        <input type="submit" value="S'incrire" />
    </form>
</body>

</html>