<?php

//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!! possible d'injecter depuis la variable direcement ( formulaire remplis avec un script)
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
    function createUser($bdd, $nom, $prenom, $mail, $password){
        try {
            $req = $bdd->query("INSERT INTO utilisateur(nom_util, prenom_util, mail_util, 
            password_util)VALUES('$nom', '$prenom', '$mail', '$password')");
        } catch (Exception $e) {
            die('Erreur frére : '.$e->getMessage());
        }
    };



//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!! possible d'injecter via echo
function createUserV2($bdd, $nom, $prenom, $mail, $password){
    try {
        $req = $bdd->query("INSERT INTO utilisateur(nom_util, prenom_util, mail_util, 
        password_util)VALUES( :nom, :prenom, :mail, :pwd)");
        $req->execute([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'mail'=>$mail,
            'pwd'=>$password
        ]);
            
            
    } catch (Exception $e) {
        die('Erreur frére : '.$e->getMessage());
    }
};



//?       !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!La BONNE A UTILISER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//?            !!!!!!!!!!!!!!!!!!!!!!!!!!La BONNE A UTILISER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//?     !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!La BONNE A UTILISER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    




    function createUserV3($bdd, $nom, $prenom, $mail, $password){
        try {
            $req = $bdd->prepare("INSERT INTO utilisateur(nom_util, prenom_util, mail_util, 
            password_util)VALUES(?,?,?,?)");

            $req->bindParam(1, $nom, PDO::PARAM_STR);
            $req->bindParam(2, $prenom, PDO::PARAM_STR);
            $req->bindParam(3, $mail, PDO::PARAM_STR);
            $req->bindParam(4, $password, PDO::PARAM_STR);
            $req->execute();
                
                
        } catch (Exception $e) {
            die('Erreur frére : '.$e->getMessage());
        }
    };


    
    function showUserByMail($bdd, $mail):?array{
        try {
            //stocker et évaluer la requête
            $req = $bdd->prepare("SELECT id_util, nom_util, prenom_util,
            mail_util, password_util FROM utilisateur WHERE mail_util = ?");
            //binder la valeur $mail au ?
            $req->bindParam(1, $mail, PDO::PARAM_STR);
            //exécuter la requête
            $req->execute();
            //stocker dans $data le résultat de la requête (tableau associatif)
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            //retourner le tableau associatif
            return $data;
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }


?>