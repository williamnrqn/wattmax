<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" media="all">
    <link rel="stylesheet" href="css/reservez.css">
    <title>Watt Max</title>
    <link rel="shortcut icon" href="https://wattmax.fr/img/6 - Sigle WM Blanc simple (1).png" type="image/x-icon">
    <script src="js/main.js"></script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="881d0574-63ef-48b4-bae4-4bf6dd273e9c" data-blockingmode="auto" type="text/javascript"></script>
</head>
<body>
    <?php include "src/header.php"?>
    <main>
        <section id="part-1">
            <h1>Demande d'essai</h1>
            <form action="src/reserve.php" method="post">
                <label for="lastname">
                    Nom
                    <span style="color:red;">*</span>
                </label>
                <input type="text" name="lastname" id="lastname" required>
                <label for="firstname">
                    Prénom
                    <span style="color:red;">*</span>
                </label>
                <input type="text" name="firstname" id="firstname" required>
                <label for="email">
                    E-mail
                    <span style="color: red;">*</span>
                </label>
                <input type="email" name="email" id="email" required>
                <label for="tel">
                    Téléphone
                    <span style="color:red;">*</span>
                </label>
                <input type="tel" name="tel" id="tel" pattern="(0|\+33 *)[1-9]( *[0-9]{2}){4}" required>
                <div id="model">
                    <h4>Motos</h4>
                    <div>
                        <label>
                            <input type="radio" name="model" id="" value="SUPER SOCO - TS Street Hunter">
                            SUPER SOCO - TS Street Hunter
                        </label>
                        <label>
                            <input type="radio" name="model" id="" value="SUPER SOCO - TC Max Full Black">
                            SUPER SOCO - TC Max Full Black
                        </label>
                        <label>
                            <input type="radio" name="model" id="" value="CAOFEN">
                            CAOFEN
                        </label>
                    </div>
                </div>
                <div id="model">
                    <h4>Scooters</h4>
                    <div>
                        <label>
                            <input type="radio" name="model" id="" value="SUPER SOCO - CPX-2">
                            SUPER SOCO - CPX-2
                        </label>
                        <label>
                            <input type="radio" name="model" id="" value="E-BROH - Spuma Li 3 K">
                            E-BROH - Spuma Li 3 K
                        </label>
                    </div>
                </div>
                <input type="submit" value="Réserver" id="reserver" name="reserver">
            </form>
        </section>
    </main>
    <?php include "src/footer.php"?>
</body>
</html>