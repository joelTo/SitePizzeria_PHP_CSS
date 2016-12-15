<?php
  // Connection au serveur
  $cnx = mysql_connect( "localhost:8889", "root", "root" ) ;
 
  // Sélection de la base de données:
  $db  = mysql_select_db( "pizzeria" ) ;
 
  // Récupération des valeurs des champs
  $libelle = $_POST["libelle"];
  $reference = $_POST["reference"];
  $prix = $_POST["prix"];
  $url_image = $_FILES['url_image']['name'];
 
  // Affichage des résultats
  if(!empty($_POST['libelle']) && !empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_FILES['url_image']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO pizza (id, libelle, reference, prix, url_image)
            VALUES ( NULL, '$libelle', '$reference', '$prix', '$url_image') " ;
 
  	// Exécution de la requête SQL:
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