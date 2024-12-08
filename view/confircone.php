<?php require_once("./model/fonction.php");?>
<div id="bag">
    <div id="conf">
        <img src="./avatar/<?=img($_SESSION['user'])?>" alt="confirmation">
        <p>bienvenue <?=$_SESSION['user']?></p>
        <a href="tchattrait.php " class="cont">continue</a>
    </div>
</div>