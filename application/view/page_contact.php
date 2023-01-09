<!DOCTYPE html>
    <html lang="fr">
        <head>
            <title>contacter moi</title>
            <link rel="stylesheet" href="../../application/assets/css/page_contact.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <meta charset="utf-8">
            <meta name="page_contact" content="formulaire_de_contact">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        </head>
        <body>
            <header>
                <div>
                    <p id="titre_formulaire">Formulaire de contact</p>
                </div>
            </header>
            <section id="bloc_general">
                <section id="contenaire_formulaire">
                    <div id="boite_du_formulaire">
                        <form action="../view/index.php" method="post">
                            <div id="champ_objet">
                                <label for="obj"><i class='fas fa-folder'>Objet :</i></label>
                                <input type="text" id="objet_contact" name="obj" spellcheck="true" required maxlength="50">
                            </div>
                            <div id="champ_E-mail">
                                <label for="mail"><i class="fa-solid fa-address-card"> E-mail :</i></label>
                                <input type="email" id="mail" name="mail" maxlength="50" required>
                            </div>
                        <div id="champ_message">
                            <label for="msg"><i class='fas fa-pen-alt'>Message :</i></label>
                            <textarea id="msg" name="msg" spellcheck="true" required maxlength="200"></textarea>
                        </div>
                        <div>
                            <button type="submit">Envoyer mon message</button>
                        </div>
                        </form>
                    </div>
                </section>
            </section>
            <footer>
                2022 Copyright dahamna sofiane
            </footer>
        </body>
    </html>