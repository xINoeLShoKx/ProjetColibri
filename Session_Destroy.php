<?php

//Permet de supprimmer et d'écraser la session actuelle
session_start();
$_SESSION['pseudo']=NULL;
//$_SESSION['id']=NULL;
session_destroy();

header("location: home_page.php");
?>