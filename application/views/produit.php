<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="<?php echo(base_url());?>css/style-produit.css">
</head>
<body>
    <nav class="bar_nav">
        <div class="logo">
            <a href="../../index.php">
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
    <div class="produit-container">
        <div class="box_produit">
            <div class="images-produit-container-tete">
                <img class="img-produit-1" src="<?php echo(base_url());?>img/velo-img1.jpg" alt="image produit"/>
            </div>
            <div class="images-produit-container-bas">
                <img class="img-produit-2" src="<?php echo(base_url());?>img/velo-img2.jpg" alt="image produit"/>
                <img class="img-produit-3" src="<?php echo(base_url());?>img/velo-img3.jpg" alt="image produit"/>
                <img class="img-produit-4" src="<?php echo(base_url());?>img/velo-img4.jpg" alt="image produit"/>
            </div>
        </div>
        <div class="info-produit">
            <div class="titre-produit">
                <h1>VÉLO ELLIPTIQUE EL540 CONNECTÉ</h1>
                <h2>35,00.€/mois</h2>
            </div>
            <div class="texte">
                <a>L'abonnement de ce vélo elliptique comprend :</a>
                <ul>
                    <li>La livraison à domicile & retour : notre service vous livre votre produit devant chez vous non monté (au pas de porte/au pied d'immeuble) et reprend le produit dans sa pièce d'utilisation</li>
                    <li>Vivre une expérience connectée avec l'application gratuite E connected qui vous accompagne avec des programmes d'entrainement pour vous aider à progresser pour atteindre vos objectifs.</li>
                    <li>Un SAV réactif en cas de pépin : Decathlon et Domyos portent une attention toute particulière au suivi de nos produits. Nous gérons nous même le service après-vente de nos produits et nous assurons la disponibilité des pièces détachées.</li>
                </ul>
                <img class="img_logo" src="<?php echo(base_url());?>img/btn-louer.png" alt="btn louer"/>
            </div>
        </div>
    </div>

    <script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/sample.js"></script>
</body>
</html>