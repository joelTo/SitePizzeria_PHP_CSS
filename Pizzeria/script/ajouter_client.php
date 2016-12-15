<?php
  // Connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  // Sélection de la base de données:
  $db  = mysql_select_db( "pizzeria" ) ;
 
  // Récupération des valeurs des champs
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $ville = $_POST["ville"];
  $age = $_POST["age"];
 
  // Affichage des résultats
  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['age']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO clients (id, nom, prenom, adresse, date_naissance)
            VALUES ( NULL, '$nom', '$prenom', '$ville', '$age') " ;
 
  	// Exécution de la requête SQL
  	mysql_query("SET NAMES 'utf8'");
  	$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
<br />
<a href="javascript:window.history.back();">Retour</a>