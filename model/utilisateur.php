<?php
    function createUser($bdd, $nom, $prenom, $mail, $password){
        try {
            $req = $bdd->query("INSERT INTO utilisateur(nom_util, prenom_util, mail_util, 
            password_util)VALUES('$nom', '$prenom', '$mail', '$password')");
        } catch (Exception $e) {
            die('Erreur frére : '.$e->getMessage());
        }
    }

?>