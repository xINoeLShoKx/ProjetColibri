<?php

//On check si la session est start ou pas
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

//Fonction principale
    $var = '0';
    /*On se co a la bdd
    include ('connexion_bdd.php');*/
    //connexion a la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db_amap', 'root', '');
}

catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

    $reponse = $bdd->query('SELECT * FROM utilisateur');
    //Parcours de liste
    while ($donnees = $reponse->fetch())
    {
        //Si l'identifiant proposé est déjà dans la BDD alors
        if ($donnees['pseudo'] == $_POST['pseudoInscr'])
        {
            //On bloque la boucle d'inscription
            $var = '1';
            $reponse->closeCursor();
            header('location:Inscription_Erreur.html');
        }
    }
    
    //Si l'identifiant proposé est déjà utillisé, on ne rentre pas, sinon pas de soucis
    if ($var == '0') 
    {
        //Si compltAdresse set
        if(isset($_POST['compladresseInscr']))
        {
            //Insert Into du nouveau compte avec les informations que l'utilisateur a donné
            $req = $bdd->prepare('INSERT INTO utilisateur(prenom_user, nom_user, mail_user, pseudo_user, mdp_user, adresse_user, cmpl_adresse_user, code_postal_user,ville_user, pays_user, tel_user) 
            	VALUES(:prenom, :nom, :mail, :pseudo, :mdp, :adresse, :complement_adresse, :code_postal, :ville, :pays, :tel)');
        $req->execute(array(
            'prenom' => $_POST['prenomInscr'],
            'nom' => $_POST['nomInscr'],
            'mail' => $_POST['emailInscr'],
            'pseudo' => $_POST['pseudoInscr'],
            'mdp' => $_POST['passwordInscr'],
            'adresse' => $_POST['adresseInscr'],
            'complement_adresse' => $_POST['compladresseInscr'],
            'code_postal' => $_POST['codeInscr'],
            'ville' => $_POST['villeInscr'],
            'pays' => $_POST['paysInscr'],
            'tel' => $_POST['telInscr'],
            ));
            $_SESSION['pseudo']= $_POST['pseudoInscr'];
            
            $reponse = $bdd->query('SELECT * FROM utilisateur');
            while ($donnees = $reponse->fetch())
            {
                if ($donnees['pseudo'] == $_SESSION['pseudo'])
                {
                    $_SESSION['id'] = $donnees['id_utilisateur'];
                }
            }
        
        //Sinon on insert into ici avec les valeurs de l'utilisateur
        }else{
        
        $req = $bdd->prepare('INSERT INTO utilisateur(prenom_user, nom_user, mail_user, pseudo_user, mdp_user, adresse_user, code_postal_user, ville_user, pays_user, tel_user)
         VALUES(:prenom, :nom, :mail, :pseudo, :mdp, :adresse, :code_postal, :ville, :pays, :tel)');
        $req->execute(array(
            'prenom' => $_POST['prenomInscr'],
            'nom' => $_POST['nomInscr'],
            'mail' => $_POST['emailInscr'],
            'pseudo' => $_POST['pseudoInscr'],
            'mdp' => $_POST['passwordInscr'],
            'adresse' => $_POST['adresseInscr'],
            'code_postal' => $_POST['codeInscr'],
            'ville' => $_POST['villeInscr'],
            'pays' => $_POST['paysInscr'],
            'tel' => $_POST['telInscr'],
            ));
            $_SESSION['pseudo']= $_POST['pseudoInscr'];
            
            $reponse = $bdd->query('SELECT * FROM clients');
            
            //On utilise cette boucle pour pouvoir trouver l'id du dernier utilisateur ajouté, pour pouvoir l'utiliser plus tard pendant que nous passerons commande ou si nous souhaitons changer une information de compte
            while ($donnees = $reponse->fetch())
            {
                if ($donnees['pseudo'] == $_SESSION['pseudo'])
                {
                    $_SESSION['id'] = $donnees['id_utilisateur'];
                }
            }
        }
        
        //On ferme toutes les query sur la bdd
        $req->closeCursor();
        $bdd=null;
        header('location:Inscription_Validation.html');
    }
?>