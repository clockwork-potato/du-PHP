<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Prix HT_ <input type="number" name="prixHT" id=""></p>
        <p>Nombre D'articles_ <input type="number" name="nbrArticle" id=""></p>
        <p>TVA_ <input type="number" name="TVA" id=""></p>
        <input type="submit" name="submit" value="">
    </form>
</body>
</html>
<?php

$ht = $_POST['prixHT'];
$nbr = $_POST['nbrArticle'];
$tva = $_POST['TVA'];


    $total = ($ht * ($tva / 100))*$nbr ;
    echo 'le prix est éfal a :'.$total.'€.';



/*-Créer une page de formulaire dans laquelle on aura 3 champs de formulaire de type nombre :
1 champ de formulaire qui demande un prix HT d’un article,
1 champ de formulaire qui demande le nombre d’article,
1 champ de formulaire qui demande le taux de TVA,
-Afficher dans cette même page le prix TTC (prix HT*taux TVA*quantité) avec un affichage du style :
Le prix TTC est égal à : valeur €.*/
?>
<style>
    form{
        border: black solid 2px;
        box-shadow: 10px 2px black 2px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-items: center;
        width: 50%;
        height: 200px;
    }
    
</style>