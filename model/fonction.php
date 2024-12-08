<?php
    require_once('connexion.php');
    function ispseudo($i){
        global $connexion;
        $b = 0;
        $requete = "SELECT * FROM `utilisateur` WHERE `pseudo`=?";
        $stmt = $connexion->prepare($requete);
        $stmt->bind_param("s", $i);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($a = $result->fetch_array(MYSQLI_ASSOC)) {
            $b++;
        }

        $stmt->close();
        return $b;
    }
    function motdepasse($i){
        global $connexion;
        $b=0;
        $requet="SELECT `mdp` FROM `utilisateur` WHERE `pseudo`=?";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("s", $i);
        $stmt->execute();
        $result = $stmt->get_result();
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $b=$a['mdp'];
        }
        return $b;
    }
    function ajouteuti($speu,$mdp,$sexe,$date,$ava){
        global $connexion;
        $mdp= password_hash($mdp, PASSWORD_DEFAULT); 
        $requet="INSERT INTO `utilisateur`(`pseudo`, `mdp`, `genre`, `ddn`, `avatar`) VALUES (?,?,?,?,?)";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("sssss", $speu, $mdp, $sexe, $date, $ava);
        $result = $stmt->execute();
        
        $stmt->close();
        return $result;
    }
    function img($i){
        global $connexion;
        $b=0;
        $requet="SELECT `avatar` FROM `utilisateur` WHERE `pseudo`=?";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("s", $i);
        $stmt->execute();
        $result = $stmt->get_result();

        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $b=$a['avatar'];
        }
        $stmt->close();
        return $b;
    }
    function comptmesage(){
        global $connexion;
        $b=0;
        $requet="SELECT COUNT(*) FROM `chatmessage`";
        $stmt = $connexion->prepare($requet);
        $stmt->execute();
        $result = $stmt->get_result();
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $b=$a['COUNT(*)'];
        }
        $stmt->close();
        return $b;
    }
    function listemesage(){
        global $connexion;
        $i=0;
        $requet="SELECT * FROM `chatmessage`INNER JOIN utilisateur WHERE `emetteur`=`pseudo` ORDER by temps DESC";
        $stmt = $connexion->prepare($requet);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $b[$i]=$a;
            $i++;
        }
        $stmt->close();
        return $b;
    }
    function getuser($nom){
        global $connexion;
        $requet="SELECT * FROM `utilisateur` WHERE `pseudo`=?";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("s", $nom);
        $stmt->execute();
        $result = $stmt->get_result();
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $b=$a;
        }
        return $b;
    }
    function ajoutmsg($mes,$temp,$user){
        global $connexion;
        $requet="INSERT INTO `chatmessage`(`message`, `temps`, `emetteur`) VALUES (?,?,?)";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("sss", $mes, $temp, $user);
        $stmt->execute();
    }
    function supmsg($id){
        global $connexion;
        $requet = "DELETE FROM `chatmessage` WHERE `id`=?";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $stmt->close();
    }
    function sumpuser($speu){
        global $connexion;
        $requet = "DELETE FROM `utilisateur` WHERE `pseudo`=?";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("s", $speu);
        $stmt->execute();

        $stmt->close();
    }
    function supmgt($speu){
        global $connexion;
        $requet = "DELETE FROM `chatmessage` WHERE `emetteur`=?";
        $stmt = $connexion->prepare($requet);
        $stmt->bind_param("s", $speu);
        $stmt->execute();
        
        $stmt->close();
    }
?>