<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
    <link rel="stylesheet" href="./style/form.css">

</head>
<body>
    <form method="POST" action="inscritraite.php" enctype="multipart/form-data">
        <h1>inscription</h1>
        <label for="speudo">speudo </label>
        <input type="text" name="speudo" placeholder="entrez votre speudo" class="<?=$class_speudo?>" minlength="8" maxlength="15" value="<?=$speudo?>" required>
        <?=($mesnom)? "<span class='error'>$mesnom</span>":  ""?>
        <label for="pwd">mot de passe</label>
        <input type="password" name="pwd" class="<?=$class_pwd?>" minlength="8" maxlength="15" required value="<?=$pwd?>">
        <div>
            <span class="<?=$mespwdmaj?>">au moins une majuscule ,</span>
            <span class="<?=$mespwdmin?>">au moins une minuscule ,</span>
            <span class="<?=$mespwdch?>">au moins un chiffre ,</span>
            <span class="<?=$mespwdsp?>">au moins un caractère spécial</span>
        </div>
        <?=($mespass)? "<span class='error'>$mespass</span>":  ""?>
        <label for="confirmation">confirmation</label>
        <input type="password" name="confirm" class="<?=$class_confirme?>" minlength="8" maxlength="15"required value="<?=$confirm?>">
        <?=($mescon)? "<span class='error'>$mescon</span>":  ""?>
        <label for="sexe">sexe</label>
        <select name="sexe">
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
            <option value="sansrep"> Sans Réponse</option>
        </select>
        <label for="datenai">date de naissance</label>
        <input type="date" name="date" class="<?=$class_date?>" value="<?=$date?>">
        <?=($mesdate)? "<span class='error'>$mesdate</span>":  ""?>
        <label for="avatar">avatar</label>
        <input type="file" name="avatar" class="<?=$class_ava?>" value=" ">
        <?=($mesava)? "<span class='error'>$mesava</span>":  ""?>
        <button type="submit">envoyer</button>
        <a href="connexiontrait.php">j'ai un compte</a>
    </form>
</body>
</html>