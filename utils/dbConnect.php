<?php
   //connexion à la base de données
   //! A COPIER COLLER ! ! ! DU COUP $bdd permet de call la DB voila c'est cool
   $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root','',
   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>