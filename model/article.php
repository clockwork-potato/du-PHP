<?php
function createArticle($bdd, $nomArticle, $contenuArticle, $dateArticle){
    try {
        $req = $bdd->query("INSERT INTO article(nom_art, contenu_art, date_art)VALUES('$nomArticle', '$contenuArticle', '$dateArticle')");
    } catch (Exception $e) {
        die('Erreur frére : '.$e->getMessage());
    }
};
$message = "";

if(isset($_POST['submit2'])){
    if(!empty($_POST['nom_art']) AND !empty($_POST['contenu_art']) AND !empty($_POST['date_art'])){;
    $nomArticle = cleanInput($_POST['nom_art']);
    $contenuArticle = cleanInput($_POST['contenu_art']);
    $dateArticle = ($_POST['date_art']);
    createArticle($bdd,$nomArticle, $contenuArticle, $dateArticle );
    $message = "le compte $nomArticle à été ajouté en BDD";
    }
    else{
    $message = "OHHHHHHHHHHHHHHHHHHHHH REMPLIS MOI !!!!";
}};

echo $message;
?>