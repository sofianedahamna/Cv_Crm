<!DOCTYPE html>
<html lang="fr">
   <head>
    <title>identification</title>
    <link rel="stylesheet" href="../assets/css/page_identification.css">
    <meta charset="utf-8">
    <meta name="page d'identification" content="Login box">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   </head>
   <body>
    <form action="../view/cv_avec_tableau_de_droite.html" method="get" target="_blank">
        <button id="button_cv" type="submit">Mon cv</button>
      </form>
        <div id="bloc_general">
            <div id="boite_de_connexion">
                <p id="titre_boite"><strong>Connexion</strong></p>
                <form method="post" action="s'identifier.php">
                <div id="champ_login"> 
                        <label for="Identifiant"><strong>login</strong></label>:<input type="text" name="pseudo" id="email">
                </div>
                <div id="champ_password">
                        <label for="Mot_de_passe"><strong>password</strong></label>:<input type="password" name="password" id="motdepasse">
                    
                </div>
                <div id="bloc_button_mdp">
                    <input id="button_connex" type="submit" value="se connecter"/> 
                </div>
                <div>
                <!--<a href="">mot de passe oublier</a>-->
                </div>
                </form>
            </div>
        </div>
        <footer>
            2022 Copyright dahamna sofiane
        </footer>
   </body> 
</html>