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
    echo 'le prix est égal a :'.$total.'€.';




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