<?php

//On check si la session est start ou pas
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

//Fonction principale
function check_login()
{
    //On se co à la bdd
    include ('connexion_bdd.php');
    $reponse = $bdd->query('SELECT * FROM utilisateur');
    //Parcours de liste
    while ($donnees = $reponse->fetch())
    {
        // Si le mot de passe rentré et le login correspondent bien à ceux dans la bdd alors on crée la session
         if ($donnees['mail_user'] == $_POST['login'] && $donnees['mdp_user'] == $_POST['mdp'])
         {
            //On detecte la session pour être utilisé plus tard, on donne des valeurs aux différentes sessions voulu
            $_SESSION['mail_user']=$_POST['login'];
            //$_SESSION['id']=$donnees['id_client'];
            // redirection page membre
            header('location: home_page_connecte.php');
         }

         else{
             header('location: Connexion_Erreur.html');
         }
    }
    //header('location: home_page_connecte.php');
}