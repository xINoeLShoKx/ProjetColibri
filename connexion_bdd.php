<?php
//connexion a la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db_amap', 'root', '');
}

catch (Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>