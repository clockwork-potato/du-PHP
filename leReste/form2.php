<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom" id="">
        <input type="text" name="nom" id="">
        <input type="text" name="pseudo" id="">
        <input type="password" name="password" id="">
        <input type="email" name="mail" id="">
        <input type="date" name="date" id="">
        <input type="submit" name="submit"  value="">




    </form>
</body>
</html>

<?php
$tab =['Lundi', 'Mardi', 'Mercredi', 'Jeudi', ' Vendredi', 'Samedi', 'Dimanche'];

if(!empty($_POST))
  {
    
    if(empty($_POST['pseudo']))
    {
      echo 'Veuillez indiquer votre pseudo svp !';
    }
      
     if(empty($_POST['password']))
    {
      echo 'Veuillez indiquer votre mot de passe svp !';
    }
      if(empty($_POST['nom']))
    {
      echo 'Veuillez indiquer votre nom svp !';
    }
      if(empty($_POST['prenom']))
    {
      echo 'Veuillez indiquer votre prenom svp !';
    }
      if(empty($_POST['mail']))
    {
      echo 'Veuillez indiquer votre mail svp !';
    }
      if(empty($_POST['date']))
    {
      echo 'Veuillez indiquer votre date svp !';
    }
    else  {
        $date = new DateTime($_POST['date']);
            echo '<p>le compte '.$_POST['mail'].' 
            a été ajouté le : '.$tab[$date->format('N')-1].' '.$date->format('d/n/Y').'</p>';
        
    }
}

     
      
      //! pour fermer rajouter .'    'Le compte '.$_POST['mail'].' à été ajouté le '.$_POST['date'].  ''
      ?>