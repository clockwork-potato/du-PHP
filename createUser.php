<?php

include './utils/dbConnect.php';
include './utils/functions.php';
include './model/utilisateur.php';
include './view/view_header.php';
include './view/view_navbar.php';
include './view/view_create_user.php';

//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!

if(isset($_POST['submit'])){
    if(!empty($_POST['nom_util']) AND !empty($_POST['prenom_util']) AND !empty($_POST['mail_util']) AND !empty($_POST['password_util']));
    $nom = cleanInput($_POST['nom_util']);
    $prenom = cleanInput($_POST['prenom_util']);
    $mail = cleanInput($_POST['mail_util']);
    //récupération du compte si il existe
    $exist = showUserByMail($bdd, $mail);
    //test si le compte existe
    if(empty($exist)){
        //version bcrypt
        $password = password_hash(cleanInput($_POST['password_util']), PASSWORD_DEFAULT);
        //fonction ajouter un utilisateur en BDD
        createUserV3($bdd,$nom, $prenom, $mail, $password);
        //message de confirmation
        $message = "le compte $nom à été ajouté en BDD";
    }
    //test sinon le compte existe
    else{
        $message = "le compte existe déja";
    }
    

//    $password = password_hash($_POST['password_util'], PASSWORD_DEFAULT);
// $password = password_hash(cleanInput($_POST['password_util']), PASSWORD_DEFAULT);

}
else{
    $message = "OHHHHHHHHHHHHHHHHHHHHH REMPLIS MOI !!!!";
}

echo $message;

//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!

include './view/view_footer.php';

?>