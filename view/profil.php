<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>profil</title>
    <link rel="stylesheet" href="./style/profil.css">
</head> 
<body>
    <nav>
        <a href="./tchattrait.php">canal</a>
        <a id="profil">profil</a>
    </nav>
    <form action="./profiltrait.php" method="POST">
        <h1>profil</h1>
        <label for="file-upload" id="imgl">
            <img src="./avatar/<?=$user['avatar']?>" alt="Nom de l'image">
        </label>
        <input id="file-upload" type="file" class="file">
        <div class="inpu">
            <span>Votre nom</span>
            <span class="rien"><?=$user['pseudo']?></span>
        </div> 
        <div class="inpu">
            <span>Mot de passe</span>
            <input type="password" name="pwd">
        </div>
        <div class="inpu">
            <span>date de naissance</span>
            <span class="rien"><?=$user['ddn']?></span>
        </div>
        <div class="inpu">
            <span>genre</span>
            <input type="text" value="<?=$user['genre']?>" maxlength="1" name="sexe">
        </div>
        <div class="con">
            <a href="profiltrait.php?sup=1">supprimer le compte</a>
            <a href="profiltrait.php?dec=1">deconnexion</a>
            <a><button>enregistré les modification</button></a>
        </div>
    </form>
</body>
</html>