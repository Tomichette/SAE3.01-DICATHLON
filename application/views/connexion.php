<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="<?php echo(base_url());?>css/connexion.css">
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
    <div class="container">
        <div class="login-container">
            <img class="img_logo" src="<?php echo(base_url());?>img/Logo-Dicatlon.png" alt="btn-connexion"/>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    <div>
</body>
</html>
