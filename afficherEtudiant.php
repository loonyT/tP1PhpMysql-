<?php
   

      
   require_once("connection.php"); // retrouver le bon fichier
       
     $req="select * from ETUDIANTS"; // recupère toutes les lignes de la table étudiant  

// il faut maintenant stocker ces lignes dans un tableau 


$rs=mysql_query($req) or die (mysql_error());

//j'exécute la requète et je stock le résultat dans la variable rs. rs est un tableau avec des lignes. on doit mtn mettre tout ça dans une page html 

      ?>

<html>

<body>
    <table border="1">
    <tr>
        <th> CODE</th> <th>NOM</th> <th>PHOTO</th>
    </tr>
    
    
    </table>
    </body>
</html>