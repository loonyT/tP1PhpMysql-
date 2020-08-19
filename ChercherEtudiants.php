<?php
   

      
   require_once("connection.php");


$mc="NULL"; //val quelququonque

//verifier si le mot clef exist : 

if(isset($_POST['motCle']))
    
{
    $mc=$_POST['motCle']; //ici on recup le mot clef et on le stock dans la variable mc
    
}



$conn=mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("BB_sco", $conn) or die (mysql_error()); 
    
     $req="select * from ETUDIANTS where NOM like '%$mc%' "; 
// % ça veut dire quel que soit le caractère avant ou après
$rs=mysql_query($req) or die (mysql_error());



      ?>

<html>

<head>

    <meta charset="utf-8">

</head>

<body>

    <form method="post" action="ChercherEtudiants.php">

        <input type="text" name="motCle" value="<?php echo($mc)?>" >

        <input type="submit" value="Chercher">


    </form>



    <table border="1" width="80%">
        <tr>
            <th> CODE</th>
            <th>NOM</th>
            <th>PHOTO</th>
        </tr>

        <?php while($ET=mysql_fetch_assoc($rs)){?>

        <tr>

            <td> <?php echo ($ET['CODE']) ?> </td>
            <td> <?php echo ($ET['NOM']) ?> </td>
            <td><img src="images/<?php echo ($ET['PHOTO']) ?>"> </td>




            <td> <a href="supprimerEtudiant.php?code=<?php echo ($ET['CODE']) ?>">Suprimmer </a> </td>
            <td>Editer</td>
            <td> <a href="editEtudiant.php?code=<?php echo ($ET['CODE']) ?>">Editer </a> </td>

        </tr>



        <?php  } ?>





    </table>
</body>

</html>
