<?php
define('HOST', 'localhost');
define('BD_NAME', 'dbvz3741_wattmax');
define('USER', 'dbvz3741_admin');
define('PASS', 'K~llKJ20&MRa');

try {
    $db = new PDO("mysql:host=" . HOST . ";dbname=" . BD_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" media="all">
    <link rel="stylesheet" href="css/produit.css" media="all">
    <title>Watt Max</title>
    <link rel="shortcut icon" href="https://wattmax.fr/img/6 - Sigle WM Blanc simple (1).png" type="image/x-icon">
    <script src="js/main.js"></script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="881d0574-63ef-48b4-bae4-4bf6dd273e9c" data-blockingmode="auto" type="text/javascript"></script>
</head>
<body>
    <?php include "src/header.php"?>
    <main>
        <h1>Motos</h1>
        <?php
        $q = $db->query("SELECT * FROM Moto");
        while ($produit = $q->fetch()) {
            ?>
            <section id="model">
                <div id="text">
                    <h2 id="title"><?=$produit['name']?></h2>
                    <p>Equivalent : <?=$produit['Equivalent']?></p>
                    <p>Puissance : <?=$produit['Puissance']?></p>
                    <p>Vitesse : <?=$produit['Vitesse']?></p>
                    <p>Permis : <?=$produit['Permit']?></p>
                    <p>Autonomie : <?=$produit['Autonomie']?></p>
                    <p>Batterie amovible : <?=$produit['Batterie_amovible']?></p>
                    <p>Coloris disponibles :</p>
                    <div id="colors">
                        <?php
                        $color = $produit['color'];
                        if (!empty($color)) {
                            $colors = explode("/", $color);
                            for ($i = 0 ; $colors[$i] ; $i++) {
                                $colors[$i] = utf8_decode($colors[$i]);
                                if ("Gris Temp?te" == $colors[$i]) $colors[$i] = "Gris_Tempête";
                                ?>
                                <div id="color">
                                    <div id="<?=$colors[$i]?>"></div>
                                    <?php if ("Gris_Tempête" == $colors[$i]) $colors[$i] = "Gris Tempête"?>
                                    <span><?=$colors[$i]?></span>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <p>Prix de base : <?=$produit['Prix_de_base']?>€</p>
                    <p>Bonus éco :&nbsp; &nbsp; &nbsp; <?=$produit['Bonus_eco']?>€</p>
                    <p>Prix :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$produit['Prix']?>€</p>
                    <a id="liens-ex" href=""><div style="background-color: rgb(var(--color-title));border-radius: 20px;height: 30px;display: flex;align-items: center;justify-content: center;"><p>En savoir +</p></div></a>
                </div>  
                <div id="picture">
                    <img src="https://wattmax.fr/img/moto/<?=$produit['photo']?>" alt="<?=$produit['name']?>">
                </div>
                <h2 id="titlemodil"><?=$produit['name']?></h2>
            </section>
            <?php
            }
        ?>
    </main>
    <?php include "src/footer.php"?>
</body>
</html>