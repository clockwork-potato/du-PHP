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