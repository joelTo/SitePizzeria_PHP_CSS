<!-- Code PHP pour la boucle des lignes -->
<html>
   <head>
       <title>Gestion : Florence Pizza</title>
   </head>
   <body>
       <header>
           <h1>Gestion des clients</h1>
           <h2><a href="ajout-client.html"> Ajout </a><a href="index.html"> /  Retour a l'accueil</a></h2>
       </header>
<?php

    $cnx = mysql_connect("localhost", "root", "") or die(mysql_error());
    $db  = mysql_select_db( "pizzeria" );
    $sql = mysql_real_escape_string("SELECT * FROM clients");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query($sql, $cnx) or die( mysql_error() );
?>
    <table>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Ville</td>
            <td>Age</td>
            <td colspan=2></td>
        </tr>
<?php
    while ($donnees=mysql_fetch_array($reponse))
    {

?>

    <!-- Code à insérer dans le HTML pour afficher les données -->
        <tr>
            <td><?php echo $donnees["id"]; ?></td>
            <td><?php echo $donnees["nom"]; ?></td>
            <td><?php echo $donnees["prenom"]; ?></td>
            <td><?php echo $donnees["adresse"]; ?></td>
            <td><?php echo $donnees["date_naissance"]; ?></td>
            <td><a href="#">Modifier</a></td>
            <td><a href="#">Supprimer</a></td>
        </tr>

    <!-- Fin du code à insérer dans le HTML pour afficher les données -->

<?php

    }

?>
</table>