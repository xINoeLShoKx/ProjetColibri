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

    $reponse = $bdd->query('SELECT * FROM Utilisateur');

    /*while($donnees = $reponse->fetch()){
        if($donnees['login'] == $_POST['login']){
            $var='1';
            $reponse->closeCursor();
            header('location:Inscription_Erreur.html');
        }
    }*/
    //Si l'identifiant proposé est déjà utillisé, on ne rentre pas, sinon pas de soucis
    if ($var == '0') 
    {
        //Si compltAdresse set        
        //Insert Into du nouveau compte avec les informations que l'utilisateur a donné

        /*INSERT INTO `utilisateur`( `prenom_user`, `nom_user`, `birthday_user`, `mail_user`, `mdp_user`, `tel_user`, `adresse_user`, `cmpl_adresse_user`, `code_postal_user`, `ville_user`, `id_type_utilisateur`) 
        VALUES ('Jeffrey', 'Cesari','1995/02/10','jeffrey.cesari.1002@gmail.com', 'admin', 0606060606, '43 Boulevard De Polangis', 'Batiment E2', 94340, 'JOINVILLE-LE-PONT', 1)
        
        */
        //Récupération des valeurs et assemblage des variables en une seule pour former la date de naissance (format: aaaa/mm/dd)
        foreach($_POST['date_naissance'] as $valeur)
        {
            $date = $valeur;
        }
        foreach($_POST['mois_naissance'] as $valeur)
        {
            $mois = $valeur;
        }
        foreach($_POST['annee_naissance'] as $valeur)
        {
            $annee = $valeur;
        }
        $datenaissance = $annee+'/'+$mois+'/'+$date;

        //Récupération des valeurs code postaux et villes
        foreach($_POST['codepostal'] as $valeur)
        {
            $var_codepostal = $bdd->query('SELECT code_postal FROM ville WHERE id_ville = '+ $valeur);
        }
        foreach($_POST['ville'] as $valeur)
        {
            $var_ville = $bdd->query('SELECT libelle_ville FROM ville WHERE id_ville = '+ $valeur);
        }

        $req = $bdd->prepare('INSERT INTO utilisateur( prenom_user, nom_user, birthday_user, mail_user, mdp_user, tel_user, adresse_user, cmpl_adresse_user, code_postal_user, ville_user, id_type_utilisateur) 
        VALUES(:prenom, :nom, :date_naissance, :mail, :mdp, :tel, :adresse, :complement_adresse, :code_postal, :ville, 2) ');
        $req->execute(array(
            'prenom' => $_POST['firstname'],
            'nom' => $_POST['lastname'],  
            'date_naissance' => $datenaissance,        
            'mail' => $_POST['email'],
            'mdp' => $_POST['password'],
            'tel' => $_POST['telephone'],
            'adresse' => $_POST['adresse1'],
            'complement_adresse' => $_POST['adresse2'],            
            'code_postal' => $var_codepostal,    
            'ville' => $var_ville,         
        ));
        
        //On ferme toutes les query sur la 
        $req->closeCursor();
        $bdd=null;
        header('location:Inscription_Validation.html');
    }

?>