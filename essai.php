<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple MVC</title>
    <link rel="stylesheet" href="./style/essai.css">
</head>
<body>
<?php $a=$_GET['b'];
    $b=($a-1)*20;
    include("pagination.php");
?>
<main>
 <?php for($i=$b;$i<$b+20;$i++){?>
        <div class="msg">
            <img src="./avatar/confirmer.png">
            <div class="msg1">
                <div class="tete">
                    <span>nom<?=$i?></span>
                    <span class="date">24/03/2023 12:05</span>
                </div>
                <p class="msge">hggff gftfjh huhvbhhvhvjq quv jqgvgvq qgv yivqv</p>
            </div>
        </div>
    <?php };?>
</main>
<footer>
    <form>
        <textarea>
        </textarea>
        <button><img src="./avatar/envoye.png"></img></button>
    </form>
</footer>
</body>
</html>