<?php

$cssTitre = "text-align: center; border: solid 2px #a4c3b2; font-family: verdana; color: #2a9d8f; padding: auto; background: rgb(244,162,97); background: linear-gradient(90deg, rgba(244,162,97,1) 0%, rgba(233,196,106,1) 34%, rgba(42,164,167,1) 100%); text-shadow: 1px 1px 2px #3a5a40, 0 0 1em #ccd5ae, 0 0 0.2em blue; border-radius: 20px";

echo "<h1 style ='$cssTitre'> Exo 1    //    Jour 2</h1>";

echo '<br>';
echo '<br>';


function moyenne($tablo){
    $moyenne = array_sum($tablo)/count($tablo);
    echo $moyenne;
}

$lulu = [10, 25, 89, 65, 84, 64, 87, 45, 69];
moyenne($lulu);

function moyenneTab($tableau){
    $somme = 0;
    foreach ($tableau as $value) {
        $somme += $value;
    }
    return $somme/count($tableau);
}
echo '<br>';
echo '<br>';
echo "<h1 style ='$cssTitre'> Exo 2 </h1>";


?>