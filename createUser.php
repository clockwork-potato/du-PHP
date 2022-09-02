<?php

include './utils/dbConnect.php';

include './model/utilisateur.php';
include './view/view_header.php';
include './view/view_navbar.php';
include './view/view_home.php';


if(isset($_POST['submit'])){
    if(!empty($_POST['nom_util']) AND !empty($_POST['prenom_util']) AND !empty($_POST['mail_util']) AND !empty($_POST['password_util']));
    $nom = ($_POST['nom_util']);
    $prenom = ($_POST['prenom_util']);
    $mail = ($_POST['mail_util']);
    $password = ($_POST['password_util']);
    createUser($bdd, $nom, $prenom, $mail, $password);
    $message = "couuou je suis $nom et ça $mail c'est mon mail";



}
else{
    $message = "OHHHHHHHHHHHHHHHHHHHHH REMPLIS MOI !!!!";
}

echo $message;




include './view/view_footer.php';

?>