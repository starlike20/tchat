<?php
    require_once("./model/fonction.php");
    session_start();
    if(isset($_SESSION['user'])){
        header("location:tchattrait.php");
    }
    else{
        $mesnom=$class_speudo=$class_pwd=$mesmot="";
        $speudo = isset($_POST['speudo']) ? htmlspecialchars( $_POST['speudo']) : "";
        $pwd = isset($_POST['pwd']) ? htmlspecialchars( $_POST['pwd']) : "";
        if(!empty($_POST)){
            if(ispseudo($speudo)==0){
                $mesnom="speudo n'existe n'es pas enregistré";
                $class_speudo="erro";
            }
            else{
                if(password_verify($pwd,motdepasse($speudo))==0){
                    $class_pwd="erro";
                    $mesmot="mot de passe erroné";
                }
                else{
                    $_SESSION['user']=$speudo;
                    include("./view/confircone.php");
                }
            }
            include("./view/connexion.php");
        }
        else{
            include("./view/connexion.php");
        }
    }
?>