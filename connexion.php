<?php 

	include ('connexion_bdd.php');

    // on teste si nos variables sont définies
    if (isset($_POST['login']) && isset($_POST['mdp'])) {

		$co = $bdd->query('SELECT count(*) from utilisateur where pseudo_user = \''.$_POST['login'].'\' AND mdp_user = \''.$_POST['mdp'].'\'')->fetchColumn();

    	if ( $co  == 1) {
    		$data = $bdd->query('SELECT id_user, pseudo_user FROM utilisateur where pseudo_user = \''.$_POST['login'].'\' AND mdp_user = \''.$_POST['mdp'].'\'');

    		session_start ();
			
    		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
    		$_SESSION['id_user'] = $_POST['id_user'];
    		$_SESSION['pseudo_user'] = $_POST['pseudo_user'];

    		// on redirige notre visiteur vers une page de notre section membre
    		header ('location: ./home_page.php');
    	}else {
			header('location: ./Inscription_Validation.html');	
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
    		echo '<body onLoad="alert(\'Nom ou mot de passe incorrect\')">';
    		// puis on le redirige vers la page d'accueil
    		echo '<meta http-equiv="refresh" content="0;URL=autobat.php">';
    	}
}
    else {
    	echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    ?>