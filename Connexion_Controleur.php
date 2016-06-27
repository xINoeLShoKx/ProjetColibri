<?php
// Si champs vides
if (empty($_POST['login']) || empty($_POST['mdp']))
{
	
  	echo "Désolé mais l'un des champs est vide, veuillez réessayer";
}
// Si champs sont remplis
else 
{
	if (isset($_POST['login']) && isset($_POST['mdp'])){
	    include ('Connexion_Modele.php');
	    check_login();
    }
}
// Le return error
function return_error()
{
   
    header('location: Inscription_Erreur.html');
}

?>