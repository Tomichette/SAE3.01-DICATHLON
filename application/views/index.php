<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" href="" type="img">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique Dicathlon</title>
</head>
<body>
    <nav class="bar_nav">
        <div class="logo">
            <a href="<?php echo(base_url());?>index.php">
                <img class="img_logo" src="<?php echo(base_url());?>img/Logo-Dicatlon.png" alt="image logo Dicathlon"/>
            </a>
        </div>
        <div class="nav">
            <a href="#" class="panier1">
                <div class="text_panier">
                    <p1>Votre</p1>
                    <p2>panier</p2>
                </div>
                <img class="icon_panier" src="<?php echo(base_url());?>img/icon-panier.png" alt="icon du panier"/>
            </a>
            
            <a href="#" class="profil">
                <div class="text_profil">
                    <p1>Bonjour</p1>
                    <p2>Jacques</p2>
                </div>
                <img class="icon_profil" src="<?php echo(base_url());?>img/icon-profil.png" alt="icone du profil"/>
            </a>
        </div>
    </nav>
    <div class="titre">
        <h1>Nos appareil de fitness en location</h1>
    </div>

    <div class="box_boutique">
    <?php
    
    foreach($produit as $element) {
        echo("
        <a href='#' class='item'>
            <div class='image'>
                <img class='velo_decath' src='<?php echo(base_url());?>img/velo_decath.png' alt='image velo decathlon'/>
            </div>
            <div class='description'>
                <div class='text'>
                    <p1>".$element->type."</p1>
                    <p2>CONNECTÉ</p2>
                    <p3>35€ par mois</p3>
                </div>
                <div class='bouton_panier'>
                    <img class='panier2' src=<?php echo(base_url());?>img/panier.png' alt='bouton panier'/>
                </div>
            </div>
        </a>
        ");
    }
    ?>

    </div>
    
</body>
</html>