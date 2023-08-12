<?php
    session_set_cookie_params(0, '/', '', false, true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" media="all">
    <link rel="stylesheet" href="css/index.css">
    <title>Watt Max | Accueil</title>
    <link rel="shortcut icon" href="https://wattmax.fr/img/6 - Sigle WM Blanc simple (1).png" type="image/x-icon">
    <script src="js/main.js"></script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="881d0574-63ef-48b4-bae4-4bf6dd273e9c" data-blockingmode="auto" type="text/javascript"></script>
</head>
<body>
    <?php include "src/header.php"?>
    <main>
        <section class="first-part1"></section>
        <section class="first-part2">
            <img id="img-principale" src="https://wattmax.fr/img/23.02 - Logo Typo blanc.png" alt="logo wattmax">
        </section>
        <section class="part-2" style="width: 100%;height: auto;">
            <div style="height: 30px;"></div>
            <h1 style="margin-top: 70px 0px;">Bienvenue dans l'électro-mobilité</h1>
            <div style="height: 30px;"></div>
            <div class="conteners">
                <div class="contener">
                    <img src="https://wattmax.fr/img/Speedometer blanc.webp" alt="Speedometer">
                    <h3 class="title-p">ACCELERATION IMMEDIATE</h3>
                    <p>Couple disponible immédiatement pour une conduite vitaminée !</p>
                </div>
                <div class="contener">
                    <img src="https://wattmax.fr/img/battery-9-128.webp" alt="battery">
                    <h3 class="title-p">FAIBLE COUT<br>DE RECHARGE</h3>
                    <p>Consommation imbattable :<br>0.38€ pour 100km</p>
                </div>
                <div class="contener">
                    <img src="https://wattmax.fr/img/Bonus eco - Prise electrique feuille.webp" alt="Bonus eco - Prise electrique feuille">
                    <h3 class="title-p">BONUS ECOLOGIQUE</h3>
                    <p>Profitez du bonus écologique de l'Etat allant jusqu'à 900€</p>
                </div>
                <div class="contener">
                    <img src="https://wattmax.fr/img/Outils.webp" alt="Outils">
                    <h3 class="title-p">ENTRETIEN REDUIT</h3>
                    <p>Moins de pièces mobiles et moins de vibration = moins de risque de panne et maintenance réduite</p>
                </div>
                <div class="contener">
                    <img src="https://wattmax.fr/img/haut parleur.webp" alt="haut parleur">
                    <h3 class="title-p">SILENCE<br>D'OR</h3>
                    <p>Plus d’échappement, plus de pollution sonore !</p>
                </div>
            </div>
            <div id="separ"></div>
        </section>
        <div class="separeter"><div></div></div>
        <section class="part-6">
            <div style="height: 30px;"></div>
            <h1 style="margin-top: 70px 0px;">Motos</h1>
            <div class="container">
                <input type="radio" name="slider" id="item-1-1" checked>
                <input type="radio" name="slider" id="item-1-2">
                <input type="radio" name="slider" id="item-1-3">
                <div class="cards">
                    <label class="card" for="item-1-1" id="song-1-1">
                        <div>
                            <h3 class="title-s">TC FC</h3>
                            <div id="img">
                                <img src="https://wattmax.fr/img/moto/TC FC sans.png" alt="">
                            </div>
                        </div>
                    </label>
                    <label class="card" for="item-1-2" id="song-1-2">
                        <div>
                            <h3 class="title-s">BRAVO GLE</h3>
                            <div id="img">
                                <img src="https://wattmax.fr/img/moto/Bravo gle.PNG" alt="">
                            </div>
                        </div>
                    </label>
                    <label class="card" for="item-1-3" id="song-1-3">
                        <div>
                            <h3 class="title-s">TC Max Full Black</h3>
                            <div id="img">
                                <img src="https://wattmax.fr/img/moto/TC max full black sans.png" alt="">
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </section>
        <div class="separeter"><div></div></div>
        <section class="part-6" style="width: 100%;height: 100%;">
            <div style="height: 30px;"></div>
            <h1 style="margin-top: 70px 0px;">Scooters</h1>
            <div class="container">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <div class="cards">
                    <label class="card" for="item-1" id="song-1">
                        <div>
                            <h3 class="title-s">CUx</h3>
                            <div id="img">
                                <img src="https://wattmax.fr/img/scooter/02_CUx_RED.png" alt="">
                            </div>
                        </div>
                    </label>
                    <label class="card" for="item-2" id="song-2">
                        <div>
                            <h3 class="title-s">SPUMA LI-3K</h3>
                            <div id="img">
                                <img src="https://wattmax.fr/img/scooter/SPUMA LI-3K.png" alt="">
                            </div>
                        </div>
                    </label>
                    <label class="card" for="item-3" id="song-3">
                        <div>
                            <h3 class="title-s">CPx</h3>
                            <div id="img">
                                <img src="https://wattmax.fr/img/scooter/f33881_f5b5bf36a5824d778e62f1f406424241_mv2.webp" alt="">
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </section>
        <div class="separeter"><div></div></div>
        <section class="part-4">
            <div class="local">
                <iframe title="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11566.032070721827!2d7.0162492!3d43.5542964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce81af31761253%3A0x4bc4c2b9a70d8efa!2sWATT%20MAX!5e0!3m2!1sfr!2sfr!4v1678794755089!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="info">
                    <div class="text">
                        <h3>SHOWROOM</h3>
                        <p>2, rue Edith Cavell<br>06400 CANNES</p>
                        <p>
                            <a href="tel:+33493396521">04.93.39.65.21</a>
                            <br>
                            <a href="mailto:contact@wattmax.fr">contact@wattmax.fr</a>
                        </p>
                        <p>Du mardi au samedi
                            <br>De 10h à 19h
                        </p>
                    </div>
                    <div class="img">
                        
                    </div>
                </div>
            </div>
        </section>    
        <section class="part-7">
            <div class="box">
                <div class="img">
                    <div class="a"><h2>Nous<br>connaitre</h2></div>
                    <div><img src="https://wattmax.fr/img/Logo moto blanc et bleu.jpg" alt=""></div>
                </div>
                <div class="text">
                    <div>
                        <p>Professionnels et passionnés de 2 roues, nous avons vu apparaitre il y a quelques temps de nouveaux engins de mobilité électrique.</p>
                        <p>Toujours curieux de n’importe quelle forme de ride, nous avons testé plusieurs modèles... et nous n’avons pas été déçus !</p>
                        <p>Ludiques, économiques et stylées, ces nouvelles machines nous ont convaincus pour leurs qualités en milieu urbain, plus particulièrement dans notre région où se déplacer en 2 roues est légion !</p>
                        <p>On retiendra avant tout une conduite acidulée avec un couple instantané grâce au moteur électrique</p>
                        <p> - Des motos et scooters aux lignes futuristes ou style vintage, destinés à tous, dès 14 ans avec des modèles équivalents à des 50 cc ou 125 cc.</p>
                        <p> - Des batteries amovibles pour recharger chez soi comme un téléphone (plus de perte de temps pour se rendre à la station-service)</p>
                        <p> - Des économies énormes : 0.38€ pour 100km.</p>
                        <p> - Des autonomies allant de 50 à 140km, largement de quoi se rendre sur son lieu de travail ou faire une balade sur le bord de mer !</p>
                        <p>Mais parce qu’un essai vaut tous les mots, nous vous invitons à venir nous rendre visite et choisir le modèle qui vous conviendra le mieux !</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="part-8" style="width: 100%;">
            <div class="box">
                <div class="text">
                    <h2>Contact</h2>
                    <p>Tel. <a href="tel:+33493396521">04 93 39 65 21</a></p>
                    <p><a href="mailto:contact@wattmax.fr">contact@wattmax.fr</a></p>
                </div>
                <div class="form">
                    <form action="src/mailcontact.php" method="post">
                        <div id="name">
                            <div id="casetext">
                                <label for="firstname">Prénom</label>
                                <input type="text" name="firstname" id="firstname"required>
                            </div>
                            <div id="casetext">
                                <label for="lastname">Nom</label>
                                <input type="text" name="lastname" id="lastname"required>
                            </div>
                        </div>
                        <div id="email">
                            <div id="casetext">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                        </div>
                        <div id="message">
                            <div id="casetext">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Envoyer" name="Envoyer" id="Envoyer">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include "src/footer.php"?>
</body>
</html>
