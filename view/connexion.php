<!-- 
    La vue elle inclut beaucoup de HTML et le PHP nécessaire à un affichage correcte.
-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <link rel="stylesheet" href="./style/form.css">
    <link rel="stylesheet" href="./style/connexion.css">

</head>
<body>
    <form method="POST" action="connexiontrait.php" enctype="multipart/form-data">
        <h1>connexion</h1>
        <label for="speudo">speudo </label>
        <input type="text" name="speudo" placeholder="entrez votre speudo" class="<?=$class_speudo?>" value="<?=$speudo?>" required>
        <?=($mesnom)? "<span class='error'>$mesnom</span>":  ""?>
        <label for="pwd">mot de passe</label>
        <input type="password" name="pwd" class="<?=$class_pwd?>" required value="<?=$pwd?>">
        <button type="submit">envoyer</button>
        <a href="inscritraite.php">je n'ai pas de compte</a>
    </form>
</body>
</html>