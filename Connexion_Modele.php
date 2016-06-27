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
    $donnees = $reponse->fetch();
    
    // Si le mot de passe rentré et le login correspondent bien à ceux dans la bdd alors on crée la session
     if (($donnees['mail_user'] == $_POST['login']) && ($donnees['mdp_user'] == $_POST['mdp']))
     {
        
                    //On detecte la session pour être utilisé plus tard, on donne des valeurs aux différentes sessions voulu
        $_SESSION['mail_user']=$_POST['login'];
        //$_SESSION['id']=$donnees['id_client'];
        // redirection page membre
        if($donnees['id_type_utilisateur'] == 1)
        {
            header('location: home_page_admin_connecte.php');
        }
        else{
            header('location: home_page_connecte.php');
        }                
     }
     else{
         header('location: Connexion_Erreur.php');
     }
    
    //header('location: home_page_connecte.php');
}


/*<?php
//On reprend la suite du code
else
{
    $message='';
    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
    Vous devez remplir tous les champs</p>
    <p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $query=$db->prepare('SELECT membre_mdp, membre_id, membre_rang, membre_pseudo
        FROM forum_membres WHERE membre_pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
        if ($data['membre_mdp'] == md5($_POST['password'])) // Acces OK !
        {
            $_SESSION['pseudo'] = $data['membre_pseudo'];
            $_SESSION['level'] = $data['membre_rang'];
            $_SESSION['id'] = $data['membre_id'];
            $message = '<p>Bienvenue '.$data['membre_pseudo'].', 
                vous êtes maintenant connecté!</p>
                <p>Cliquez <a href="./index.php">ici</a> 
                pour revenir à la page d accueil</p>';  
        }
        else // Acces pas OK !
        {
            $message = '<p>Une erreur s\'est produite 
            pendant votre identification.<br /> Le mot de passe ou le pseudo 
                entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
            pour revenir à la page précédente
            <br /><br />Cliquez <a href="./index.php">ici</a> 
            pour revenir à la page d accueil</p>';
        }
    $query->CloseCursor();
    }
    echo $message.'</div></body></html>';

}*/
?>






