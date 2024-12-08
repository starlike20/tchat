<?php 
include("./model/fonction.php");
session_start();
if(isset($_SESSION['user'])){
    header("location:tchattrait.php");
}
$class_speudo =$class_pwd =$class_confirme= $class_date=$class_ava =$mesnom=$mespwdmaj=$mespwdmin=$mespwdch=$mespwdsp=$mescon=$mesdate=$mesava=$mespass="";
$speudo = isset($_POST['speudo']) ? htmlspecialchars($_POST['speudo']) : "";
$pwd = isset($_POST['pwd']) ? htmlspecialchars($_POST['pwd']) : "";
$confirm = isset($_POST['confirm']) ? htmlspecialchars($_POST['confirm']) : "";
$sexe = isset($_POST['sexe']) ? htmlspecialchars($_POST['sexe']) : "";
$date = isset($_POST['date']) ? htmlspecialchars($_POST['date']): "";
$date1=new DateTime($date);
$dateactu=new DateTime();
$avatar = isset($_FILES['avatar']) ? $_FILES['avatar'] : "";
if(!empty($_POST)){
    if (!ctype_print($speudo)) {
        $mesnom="La chaîne contient des caractères non imprimables.";
        $class_speudo="erro";
    } 
    else {
        if(ispseudo($speudo)){
            $mesnom="speudo déjà pris";
            $class_speudo="erro";
        }
    }
    if (!ctype_print($pwd)) {
        $mespass="La chaîne contient des caractères non imprimables.";
        $class_pwd="erro";
    } 
    else{
        if(!preg_match("#[A-Z]+[a-z]+\d+[@$!%*?&]+#",$pwd)){
            $class_pwd="erro";
            if(!preg_match("#[A-Z]#",$pwd)){
                $mespwdmaj="error";
            }
            else{
                $mespwdmaj="valide";
            }
            if(!preg_match("#[a-z]#",$pwd)){
                $mespwdmin="error";
            }
            else{
                $mespwdmin="valide";
            }
            if(!preg_match("#\d#",$pwd)){
                $mespwdch="error";
            }
            else{
                $mespwdch="valide";
            }
            if(!preg_match("#[@$!%*?&]#",$pwd)){
                $mespwdsp="error";
            }
            else{
                $mespwdsp="valide";
            }
        }
        else{
            $mespwdmaj=$mespwdmin=$mespwdch=$mespwdsp="valide";
            if($pwd!=$confirm){
                $class_confirme="erro";
                $mescon="les mots de passes entrez sont different";
            }
        }
    }
    
    $diff = $dateactu->diff($date1);
    if ($diff->format('%y') <= 14 || $diff->format('%y') >= 80) {
        if($diff->format('%y') <=0 || $diff->format('%y') >= 80){
            $mesdate="entrez une date de naissance valide";
        }
        else{
            if($diff->format('%y') <= 14){
                $mesdate="vous etes mineur";
            }
        }
    }
    if(!empty($_FILES['avatar'])){
        if($_FILES['avatar']['type']!="image/png" &&  $_FILES['avatar']['type']!="image/jpeg" ){
            $mesava="l'image doit etre de type jpeg ou png";
        }
        else{
            if($_FILES['avatar']['type']=="image/png"){
                $type="png";
            }
            else{
                $type="jpeg";
            }
            if(getimagesize($_FILES['avatar']['tmp_name'])[0]>400){
                $mesava="largeur superieur a 400";
            }
            else{
                if(getimagesize($_FILES['avatar']['tmp_name'])[1]>400){
                    $mesava="longeur superieur à 400";
                }
            }
        }
    }
    if($mesava=="" && $mesdate=="" && $mescon=="" && $class_pwd==""&& $mesnom==""){
        include("./view/confirinscr.php");
        $_FILES['avatar']['name']="$speudo".".$type";
        ajouteuti($speudo,$pwd,$sexe,$date,$_FILES['avatar']['name']);
        move_uploaded_file($_FILES['avatar']['tmp_name'], './avatar/'.$_FILES['avatar']['name']);
    }

    include("./view/inscription.php");
}
else{
    include("./view/inscription.php");
}
?>