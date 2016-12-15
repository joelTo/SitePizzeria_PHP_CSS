<!-- Code PHP pour la boucle des lignes -->
<html>
   <head>
       <title>Gestion : Florence Pizza</title>
   </head>
   <body>
       <header>
           <h1>Gestion des commandes</h1>
           <h2><a href="ajout-commande.html"> Ajout </a><a href="index.html"> /  Retour a l'accueil</a></h2>
       </header>
<?php

    $cnx = mysql_connect("localhost", "root", "") or die(mysql_error());
    $db  = mysql_select_db( "pizzeria" );
    $sql = mysql_real_escape_string("SELECT * FROM commande");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query($sql, $cnx) or die( mysql_error() );
?>
    <table>
        <tr>
            <td>Id</td>
            <td>Numero</td>
            <td>Date</td>
            <td>Client</td>
            <td>Livreur</td>
            <td colspan=2></td>
        </tr>
<?php
    while ($donnees=mysql_fetch_array($reponse))
    {

?>

    <!-- Code à insérer dans le HTML pour afficher les données -->
        <tr>
            <td><?php echo $donnees["id"]; ?></td>
            <td><?php echo $donnees["numero_commande"]; ?></td>
            <td><?php echo $donnees["date_commande"]; ?></td>
            <td><?php echo $donnees["client_id"]; ?></td>
            <td><?php echo $donnees["livreur_id"]; ?></td>
            <td><a href="#">Modifier</a></td>
            <td><a href="#">Supprimer</a></td>
        </tr>

    <!-- Fin du code à insérer dans le HTML pour afficher les données -->

<?php

    }

?>
</table>