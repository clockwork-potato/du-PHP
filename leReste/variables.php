<?php
    $nbr1 = 10;
    $nbr2 = 13;
    $nbr2 = 50;
    $nbr1 = $nbr2;
    echo $nbr1 ."<br>";   // . rajout grace a ce ptit point .
    echo $nbr2."<br>";
    echo $nbr2 + $nbr1."<br>";
?>
<?php 

    function test(int $nbr1, int $nbr2){       // int pour un entier
        $total = $nbr1 + $nbr2 ;
        echo $total."<br>";
        return $total;
    };
    test(10, 30);
    test(1058.25000000001, 9544656.25241);
//poil

function test3( $nbr1, $nbr2, $nbr3){       
    $total = $nbr1 + $nbr2 + $nbr3 ;
    echo $total."<br>";
    return $total;
};
test3(10, 15, 150);



function testM( $nbr1, $nbr2, $nbr3){       
    $total = ($nbr1 + $nbr2 + $nbr3)/3 ;
    echo $total."<br>";
    return $total;
};
testM(10, 15, 150);

?>



<?php

// faire un array
$tab = [];
// ou
$tabb = array();

//---------------------------------------------------------------------//

$maTab = ['nom' => 'Bdrx' ,'prenom' => 'Flo', 'age' => 21];

echo $maTab['nom'].'<br>';
$maTab['tel'] = '060504030201';
echo $maTab['tel'].'<br>';
//!----------------------------------//! 
var_dump($maTab);   //!------------> ON PEUT VOIR LE TABLAL ENTIER  VAR DUMP --------------------//!
echo '<br>';
echo '<br>';
echo '<br>';

          //!       clé          valeur
foreach($maTab as $maKey => $nomDeVarKonVeuKek){
    echo $maKey.  ' => '  .$nomDeVarKonVeuKek.'<br>';
};



echo '<br>';
echo '<br>';
echo '<h1> Exo 1</h1>';
echo '<br>';
echo '<br>';

$tabExo = [12, 25, 85, 74, 69, 32, 54, 1, 3];

echo '<br>';

echo max($tabExo).'<br>';
echo min($tabExo).'<br>';
echo '<br>';

echo '<h1> Exo 2</h1>';

?>
<?php 





?>