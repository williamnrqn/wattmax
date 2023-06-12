<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" media="all">
    <link rel="stylesheet" href="css/Contact.css" media="all">
    <title>Watt Max</title>
    <script src="js/main.js"></script>
    <link rel="shortcut icon" href="https://wattmax.fr/img/6 - Sigle WM Blanc simple (1).png" type="image/x-icon">
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="881d0574-63ef-48b4-bae4-4bf6dd273e9c" data-blockingmode="auto" type="text/javascript"></script>
</head>
<body>
    <?php include "src/header.php"?>
    <main>
        <h1>Contact</h1>
        <section id="part-1">
            <div>
                <div id="text">
                    <p>Venez nous rencontrer</p>
                    <p><b>WATT MAX</b><br>2, rue Edith Cavell<br>06400 CANNES</p>
                    <p><a href="tel:+33493396521">Tel. 04 93 39 65 21</a><br><a href="mailto:contact@wattmax.fr">contact@wattmax.fr</a></p>
                    <p>Horaires d'ouverture<br>Du mardi au samedi<br>10h - 19h</p>
                </div>
                <div id="picture"></div>
            </div>
        </section>
        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5783.016037373984!2d7.011866469179449!3d43.55429637902253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce81af31761253%3A0x4bc4c2b9a70d8efa!2sWATT%20MAX!5e0!3m2!1sfr!2sfr!4v1680792151512!5m2!1sfr!2sfr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="part-8">
            <div class="box">
                <div class="text">
                    <p>Une question ?</p>
                    <p>Une demande d'essai ?</p>
                    <p>Joindre l'atelier ?</p>
                    <p>N'hésitez pas à nous contacter !</p>
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
