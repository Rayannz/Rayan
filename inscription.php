<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=id20282801_sitemehdirayan;chareset=utf8;', 'id20282801_root', 'hbjFT-)T@J+x0_fa');
if (isset($_POST['envoie'])){
    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));
    }else {
    echo"Veuillez compléter tout les champs...";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inscription Forum Mehdi</title>
        <link rel="icon" type="image/x-icon" href="/img/logo.ico">
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
    </head>
    <body>
     <a href="https://mehdiweb.000webhostapp.com/connexion.php">Vous connectez</a>
        <div class ="center">
            <h1>S'inscrire</h1>
            <form method="POST"> 
                <div class="txt_field">
                <div class="rayan">
                    <input type="text" name="pseudo" autocomplete="off">
                    <label>Nom d'utilisateur</label>
                </div>
                <br>
                <div class="txt_field">
                    <input type="password" name="mdp" autocomplete="off">
                    <label>Mot de Passe</label>
                </div>
                <br/><br/>
                <input type="submit" name="envoie">
            </form>
        </div>
    </body>ws
</html>