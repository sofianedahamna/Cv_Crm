<!DOCTYPE html>
<html lang="fr">

<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="../assets/css/page_dashboard.css">
    <meta charset="utf-8">
    <meta name="page_dashboard" content="tableau_de_bord">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../application/assets/js/dashboard.js"></script>
    <style>
    </style>
</head>

<body>
    <header>
        <div id="bloc_titre">
            <div id="ctn_titre_head">
                <h1 id="titre_01">CV-CRM</h1>
            </div>
            <div id="ctn_user_info">
                <div>
                    <h3 id="titre_02">Dahamna Sofiane</h3>
                </div>
                <div id="ctn_menu_right">
                    <ul id="menu_prenom">
                        <li class="lst_menu"><a href="http://localhost/cv_crm_dahamna_sofiane/application/view/cv_avec_tableau_de_droite.php" target="blank">Acces CV</a></li>
                        <li class="lst_menu">Parametre compte</li>
                        <li class="lst_menu">Deconnection</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section id="bloc_general">
        <div id="menu" data-status-open="false">
            <div>
                <button id="btn_menu_deroulant"><img src="../assets/img/maison.png" alt="" style="width: 50px;"></button>
            </div>
            <ul id="menu_deroulant">
                <li class="lst_menu_deroulant">
                    <div class="menu_gauche"><a href=""> Tableau de bord</a></div>
                    <div><img src="../assets/img/icons8-dashboard-48.png" alt=""></div>
                </li>
                <li class="lst_menu_deroulant">
                    <div class="menu_gauche"><a href="">Messagerie</a></div>
                    <div><img src="../assets/img/icons8-message-50.png" alt=""></div>
                </li>
                <li class="lst_menu_deroulant">
                    <div class="menu_gauche"><a href="">Edition CV</a></div>
                    <div><img src="../assets/img/icons8-cv-50.png" alt=""></div>
                </li>
                <li class="lst_menu_deroulant">
                    <div class="menu_gauche"><a href="">Carnet d'adresse</a></div>
                    <div><img src="../assets/img/icons8-carnet-dadresses-2-50.png" alt=""></div>
                </li>
            </ul>
        </div>
        <div id="ctn_central">
            <section id="bloc_du_haut">
                <div id="bloc_stat">
                    <div>
                        <h2>Statistique</h2>
                    </div>
                    <div id="audience">
                        <div id="nombre_de_vue">
                            <p>Vue Totale</p> <output>22</output>
                        </div>
                        <div id="nombre_de_message">
                            <p>Message reçu</p><output>22</output>
                        </div>
                        <div id="audience_general">
                            <p>Audience</p><output>22</output>
                        </div>
                    </div>
                </div>
                <div id="bloc_compteur_msg">
                    <div id="nb_message_non_lus">
                        <p>Message non vue: <output> 5 </output></p>
                    </div>
                    <div id="ctn_input_search">
                        <label for="input_recherche"></label>
                        <input type='text' id='input_recherche' name='input_recherche'value="Rechercher">
                    </div>
                    <div id="ctn_btn_search">
                        <button id="btn_recherche_email" type="submit">Rechercher</button>
                    </div>
                </div>
            </section>
            <section id="bloc_du_bas">
                <div>
                    <table id="table_messagerie">
                        <th>Expediteurs</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Objet</th>
                        <th>icon</th>
                        <tr>
                            <td class="cellule_expediteur">Giacomo Guilizzoni</td>
                            <td>01/02/2022</td>
                            <td class="cellule_email">giacomo@gmail.com</td>
                            <td>demande de contact</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="cellule_expediteur">Marco Botton</td>
                            <td> 03/02/2022</td>
                            <td class="cellule_email">marcob@gmail.com</td>
                            <td>demande de contact</td>
                            <td></td>
                        </tr>
                        <tr>

                            <td class="cellule_expediteur">Mariah Maclachlan</td>
                            <td>08/01/2022</td>
                            <td class="cellule_email">mariahma@gmail.com,</td>
                            <td>demande de contact</td>
                            <td></td>
                        </tr>
                        <tr>

                            <td class="cellule_expediteur">Valerie Liberty</td>
                            <td>14/01/2022</td>
                            <td class="cellule_email">valerielib@gmail.com</td>
                            <td>demande de contact</td>
                            <td></td>
                        </tr>
                        <tr>

                            <td class="cellule_expediteur">Guido Jack Guilizzoni</td>
                            <td>18/01/2022</td>
                            <td class="cellule_email">guidojack@gmail.com</td>
                            <td>demande de contact</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </section>
    <footer>
        2022 Copyright dahamna sofiane
    </footer>
</body>

</html>