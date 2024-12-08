<?php require_once("./model/fonction.php");?>
<div id="bag">
    <div id="conf">
        <img src="avatar/Delete.png" alt="confirmation">
        <p>confirmer la suppression</p>
        <div id="confe">
            <a href="tchattrait.php?supr=<?=$_GET["sup"]?>"class="cont">supprimer</a>
            <a href="tchattrait.php" class="cont">annuler</a>
        </div>
    </div>
</div>