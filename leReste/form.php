<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="get">
        <p><input type="text" name="nom"></p>
        <p><input type="text" name="prenom"></p>
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>
</body>
</html>


<?php
//! 'Double' 'quote' 'string' 'can' 'escape' 'characters' \n = '''new' 'line'''  \t = 'tab'  \\





//?---- Bouton CLIQUER ? ------------//


if(isset($_GET['submit'])){

}

else{
    echo '<p>c pas  boooooon</p>';
}




?>