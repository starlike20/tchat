<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>tchat</title>
    <link rel="stylesheet" href="style/tchat.css">
    <link rel="stylesheet" href="./style/pagination.css">
</head> 
<body class="<?=$scrol?>">
    <header> 
        <?php
         include("pagination.php")?>
        <nav>
            <a id="canal">canal</a>
            <a href="./profiltrait.php">profil</a>
        </nav>
    </header>
    <div class="tchat">
    <?php
        for($i=20*($a-1);$i<20*($a-1)+$max;$i++) { ?>
        <div class="msg <?=$b[$i]['issu']?>">
            <img src="./avatar/<?=$b[$i]['avatar']?>">
            <div class="msg1" style="border-left: 10px solid rgb(<?=$b[$i]['red']?>,<?=$b[$i]['bleu']?>,<?=$b[$i]['green']?>);">
                <div class="tete">
                    <div>
                        <span class="<?=$b[$i]["genre"]?>"><?=$b[$i]['pseudo']?></span>
                        <span class="date"><?=$b[$i]["temps"]?></span>
                    </div>
                    <?php if($b[$i]['issu']=="gauche"){?>
                        <a href="tchattrait.php?sup=<?=$b[$i]["id"]?>"><img src="avatar/Delete.png"></a>
                    <?php }?>
                </div>
                <p class="msge"><?=$b[$i]["message"]?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    <footer>
        <form action="./tchattrait.php" method="POST">
            <?=($mesmes)? "<span class='error'>$mesmes</span>":  ""?>
            <textarea name="message" maxlength="10000" class="<?=$class_ms?>">
                <?=$message?>
            </textarea>
            <button><img src="./avatar/envoye.png"></img></button>
        </form>
    </footer>
</body>
</html>