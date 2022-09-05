<?php

include './utils/dbConnect.php';

include './model/utilisateur.php';
include './view/view_header.php';
include './view/view_navbar.php';
include './view/view_create_user.php';

//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!

if(isset($_POST['submit'])){
    if(!empty($_POST['nom_util']) AND !empty($_POST['prenom_util']) AND !empty($_POST['mail_util']) AND !empty($_POST['password_util']));
    $nom = ($_POST['nom_util']);
    $prenom = ($_POST['prenom_util']);
    $mail = ($_POST['mail_util']);
    $password = md5($_POST['password_util']);
    createUserV3($bdd, $nom, $prenom, $mail, $password);
    $message = "couuou je suis $nom et ça $mail c'est mon mail et je suis dans la DB";



}
else{
    $message = "OHHHHHHHHHHHHHHHHHHHHH REMPLIS MOI !!!!";
}

echo $message;

//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!
//! NON securisé !!!!!!!!! A NE JAMAIS UTILISER !!!!!!!!!

include './view/view_footer.php';

?>