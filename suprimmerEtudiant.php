<?php
require_once("connection.php");
//comment récupérer la valeure du paramètre code ? 
$code=$_GET_['code'];
$_REQUEST="delete from ETUDIANTS where (CODE=$code)";


//execution de la requète : 
mysql_query($req) or die(mysql_error());
//en tête http qui dit au naviguateur d'appeler une autre page c'est une redirection
header("location:AfficherEtudiants.php") 
    //c'est une manière de faire la redirection
    //it gives a parse error
    
//add of the forward function 
    
  require_once("AfficherEtudiants.php");   
    
?>

/*beaucoup d'opération se font derrière le simple fait de cliquer sur "suprimmer"*/

/* qu'est ce qu'une redirection ? on a un client qui envoit une reqète au serveur en demandant un fichier. Par exemple dans notre cas c'est suprimmer.php 

la redirection envoit une réponse vers le client pour lui demander de faire appel à un autre fichier afficher.php. Le client envoit alors une autre requète vers le fichier affiche.php et ce fichier s'exécute et renvoit une réponse au client. Redirection = comme appeler qq'un au tél qui pourrait pas nous aider mais pourrait nous rencarder sur qq'un qui pourrait. 

Pour le forward : on a un client et un serveur. Le client demande une page au serveur par un une reqète pour le script supprimer.php Ce script fait appel lui même dans le serveur à un autre fichier s'appelant affiche.php. Après affiche.php fait son taff et quand il finit ben il envoit la réponse. 



*/