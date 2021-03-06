<!DOCTYPE html>
<html lang="en">
<?php session_start();

if (!isset($_SESSION['mail_user']))
{
    header("location:home_page.php");
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/amap_logo.png" />

    <title>AMAP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- MY CSS MOTHERFUCKER -->
    <link href="css/perso_night.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Magra' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="menu">
                    <li>
                        <!-- Trigger the modal with a link -->
                        <a data-toggle="modal" data-target="#myModal">Se connecter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <body id="page-top">

 <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
            <h1>OUPS !</h1> 
            <hr> 
             <p class="text-muted">Le nom d'utilisateur ou le mot de passe que vous avez entré est incorrect.</p>        
            </div>
            <br><br>
           <div class="text-center" style="margin-top: 20px;"><a href="home_page.php"><button type="button" class="btn btn-primary outline" style="margin-bot: 20px;">Retour</button></a></div>
        </div>
    </aside>    
                            <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Connexion</h4>
          </div>
            <form class="form-inscription" method="post" action="Connexion_Controleur.php">
                      <div class="modal-body">
                        <p class="text-muted">Identifiant
                        <input type="identifiant" class="form-control" placeholder="Votre identifiant" name="login" pattern="{3,20}"></p>
                         <p class="text-muted">Mot de passe
                         <input type="password" class="form-control" placeholder="Votre mot de passe" name="mdp" pattern="(?=.*\d)(?=.*[0-9]).{6,}"></p>
                         <!--<h5 class="text-muted"><input type="checkbox" class="checkbox" />Se souvenir de moi</h5>-->
                         <p><a data-toggle="modal" data-target="#modalInscription" class="link_inscription">Pas encore inscrit(e) ?</a></p>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-default" href="connexion.php">Connexion</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                      </div>
            </form>
        </div>

      </div>
    </div>
        <!-- Modal Inscription -->
    <div id="modalInscription" class="modal fade" role="dialog">
      <div class="modal-dialog">

                    <!-- Modal Inscription content-->
        
            <div class="modal-content">
                <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                          <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                          <form class="form-inscription" method="post" action="inscription_insertion_dans_bdd.php">
                          <label class="radio-inline">
                              <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                              Female
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                              Male
                          </label>
                          <div class="row">
                              <div class="col-xs-6 col-md-6">
                                  <input class="form-control" name="firstname" placeholder="Prenom" type="text"required autofocus />
                              </div>
                              <div class="col-xs-6 col-md-6">
                                  <input class="form-control" name="lastname" placeholder="Nom" type="text" required />
                              </div>
                          </div>
                          
                          <input class="form-control" name="email" placeholder="Votre Email" type="email" />
    
                          <input class="form-control" name="password" placeholder="Votre Motdepasse" type="password" /> 
                          <label for="">
                              Date de naissance</label>
                          <div class="row">
                              <div class="col-xs-4 col-md-4">
                                  <select class="form-control">
                                      <option value="Day">Jour</option>
                                  </select>
                              </div>
                              <div class="col-xs-4 col-md-4">
                                  <select class="form-control">
                                      <option value="Month">Mois</option>
                                  </select>
                              </div>                              
                              <div class="col-xs-4 col-md-4">
                                  <select class="form-control">
                                      <option value="Year">Année</option>
                                  </select>
                              </div>
                          </div>                         
                          <input class="form-control" name="telephone" placeholder="Votre Numéro de téléphone" type="telephone" />
                          <input class="form-control" name="adresse1" placeholder="Votre adresse" type="text" />
                          <input class="form-control" name="adresse2" placeholder="Complément d'adresse" type="text" />
                          <input class="form-control" name="postalecode" placeholder="Votre CodePostal" type="text" />
                          <input class="form-control" name="ville" placeholder="Ville où vous vivez en ce moment" type="text" />                          
                          
                          <br /><br />
                          <button class="btn btn-lg btn-primary btn-block" type="submit">Confirmez !</button>
                          <button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-controls-modal="#modalInscription" data-backdrop="static" data-target="#modalInscription">Retour</button>
            

                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

    <!-- Pannels -->
    <script type="text/javascript" src="js/pannels.js"></script>
</body>
</html>