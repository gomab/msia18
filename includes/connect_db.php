<?php
    try{
        $bdd = new PDO('mysql:host='.DBSERVEUR.'; dbname='.DBBASE, DBUSER, DBPASS, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }catch(Exception $e){
	   die('Erreur  : ' . $e->getMessage().' <br>Numéro erreur depuis connect_db.php : '.$e->getCode());
    }
?>