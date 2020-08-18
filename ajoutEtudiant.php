<?php

// instruction to connect to database or display err msg 
$bdd = new PDO('mysql:host=localhost;dbmane=bb_sco;chartset=utf8','root','root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//select database

mysql_select_db("bb_sco",$conn)or die (mysql_error()); 

//how to fetch and retreive the datas ? here were sending http request. Here it is to retreive id of the student
require_once("connection.php"); //inclut un fichier à l'intérieur d'un autre 

$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photos']['name']; 
//here the appache server stock the img of photo in a temp file
$tmp_tmp_name=$_FILES['photo']['tmp_name'];
//chemin temporaire a deplacer vers le dossier que je veux
move_uploaded_file($file_tmp_name,"./images/$nomPhoto");
// ici j'ai récup les données 
//ici j'insère les données dans la base de donnée 

$req="insert into ETUDIANT(NOM, EMAIL, PHOTO) values ('$nom', '$email', '$nomPhoto') ";
// how to execute the request ? 
 mysql_query($req) or (die(mysql_error()));
//here, the photo is registered 


?>

<html>
<body>
    <table border="1">
    <tr>
        <td>  Nom </td>
        <td> <?php echo ($nom) ?>   </td>
        </tr>
        <tr>
        <td>  Email :  </td>
        <td> <?php echo ($email) ?>   </td>
        </tr>
        <tr>
        <td>  Photo:  </td>
        <td><img src = "images/<?php echo ($nomPhoto) ?>"></td>
        </tr>
    </table>
    
    <a href="Afficher les étudiants.php"></a>
    
    
    
    </body>
</html>
