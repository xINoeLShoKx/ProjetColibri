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
    
    //Si l'identifiant proposé est déjà utillisé, on ne rentre pas, sinon pas de soucis
    if ($var == '0') 
    {
        //Si compltAdresse set
        if(isset($_POST['adresse2']))
        {
            //Insert Into du nouveau compte avec les informations que l'utilisateur a donné
            $req = $bdd->prepare('INSERT INTO utilisateur(prenom_user, nom_user, pseudo_user, mail_user, mdp_user, tel_user, adresse_user, cmpl_adresse_user, code_postal_user, ville_user) 
            	VALUES(:prenom, :nom, :pseudo, :mail, :mdp, :tel, :adresse, :complement_adresse, :code_postal, :ville, ) WHERE ville.libelle_ville = ville.id_ville AND ville.id_ville = utilisateur.id_ville AND utilisateur.id_ville = utilisateur.ville_user');
        $req->execute(array(
            'prenom' => $_POST['firstname'],
            'nom' => $_POST['lastname'],            
            'pseudo' => $_POST['pseudo'],
            'mail' => $_POST['email'],
            'mdp' => $_POST['password'],
            'tel' => $_POST['telephone'],
            'adresse' => $_POST['adresse1'],
            'complement_adresse' => $_POST['adresse2'],
            'code_postal' => $_POST['postalcode'],
            'ville' => $_POST['ville'],            
            ));
        
        //Sinon on insert into ici avec les valeurs de l'utilisateur
        }else{
        
        //Insert Into du nouveau compte avec les informations que l'utilisateur a donné
            $req = $bdd->prepare('INSERT INTO utilisateur(prenom_user, nom_user, pseudo_user, mail_user, mdp_user, tel_user, adresse_user, code_postal_user, ville_user) 
                VALUES(:prenom, :nom, :pseudo, :mail, :mdp, :tel, :adresse, :code_postal, :ville, ) WHERE ville.libelle_ville = ville.id_ville AND ville.id_ville = utilisateur.id_ville AND utilisateur.id_ville = utilisateur.ville_user');
        $req->execute(array(
            'prenom' => $_POST['firstname'],
            'nom' => $_POST['lastname'],            
            'pseudo' => $_POST['pseudo'],
            'mail' => $_POST['email'],
            'mdp' => $_POST['password'],
            'tel' => $_POST['telephone'],
            'adresse' => $_POST['adresse1'],
            'code_postal' => $_POST['postalcode'],
            'ville' => $_POST['ville'],            
            ));
        
        //On ferme toutes les query sur la bdd
        $req->closeCursor();
        $bdd=null;
        header('location:Inscription_Validation.html');
    }
?>