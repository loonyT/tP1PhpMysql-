<?php

require_once("connection.php"); 
$code=$_POST['code'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photos']['name']; 
$tmp_tmp_name=$_FILES['photo']['tmp_name'];

move_uploaded_file($file_tmp_name,"./images/$nomPhoto");
$_REQUEST="update ETUDIANTS set NOM='$nom',EMAIL='$email',PHOTO='$nomPhoto' where CODE=$code" //on ajoute une condition where pour pas modifier toute la table des étudiants ici c'est  la requète a exécuter en sommes. 

mysql_query($_REQUEST) or die (mysql_error()); 

// comment revenir à l'affichage pour montrer ? here you go : 

header("location:AfficherEtudiants.php");



?>