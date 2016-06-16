<?php 
   /* try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=db_amap', 'root', '');
    }

    catch (Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }*/

    //On démarre la session de l'utilisateur
    session_start();
    //On regarde si son pseudo existe
    if (isset($_SESSION['pseudo_user']))
    {
        header("location:home_page_connecte.php");
    }

    $type_utilisateur = $bdd->prepare('SELECT id_type_utilisateur from type_utilisateur WHERE pseudo_user...');

    if ($type_utilisateur == 1){
?>

<?PHP
    }
    else
    {
        echo 'Sorry my friend, tu n\'as pas accès à la page car il faut avoir un compte ADMIN !';
    }
?>