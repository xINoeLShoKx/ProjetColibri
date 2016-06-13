<!DOCTYPE html>
<html lang="en">
<?php session_start();?>

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
                        <a data-toggle="modal" data-target="#myModal">Log in</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <header class="intro-header">
        <div class="container">
            <div class="row">

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: 0 auto">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img\amap1.jpg" alt="Chania">
      <div class="carousel-caption">
         <h3>Découvrez l'AMAP</h3>
         <p>Un système favorisant les consommateurs ET les producteurs</p>
      </div>
    </div>

    <div class="item">
      <img src="img\amap2.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Des produits frais</h3>
        <p>Issus de l'agriculture biologique, à deux champs de chez vous</p>
      </div>
    </div>

    <div class="item">
      <img src="img\amap3.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Des recettes avec des aliments de saison</h3>
        <p>Découvrez chaque semaine une liste de plats à préparer avec le contenu de votre panier</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            </div>
        </div>
    </header>

<!-- PANNEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELS -->
   
<div class="container">
  
    <div class="row">
        <div class="col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Où nous trouver ?</h4>
                    <p>Trouvez le dépot le plus proche de chez vous</p>
                </div>
                <img src="img/map.jpg" alt="...">
            </div>
      </div>
      
        <div class="col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Votre prochain panier !</h4>
                    <p>Découvrez le contenu du prochain panier</p>
                </div>
                <img src="img/osier.jpg" alt="...">
            </div>
      </div>

        <div class="col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Dernières nouvelles</h4>
                    <p>Informez-vous des dernières actualités</p>
                </div>
                <img src="img/news.jpg" alt="...">
            </div>
      </div>

        <div class="col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4>Évènements à venir</h4>
                    <p>Participez aux prochains évènements</p>
                </div>
                <img src="img/events.jpg" alt="...">
            </div>
      </div>        
        
  </div>
  
</div><!-- /.container -->

<!-- fin PANNEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELS -->

<!-- PANIEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEERS -->

<div class="container">

<div class="row">
<div class="col-lg-1">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>

<div class="col-lg-1">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>

<div class="col-sm-1">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
</div>
</div>

</div>

<!-- fin PANIEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEERS -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">AMAP de merde Inc &copy;</p>
                </div>
            </div>
        </div>
    </footer>
                        <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Connexion</h4>
          </div>
            <form class="form-inscription" method="post" action="connexion.php">
                      <div class="modal-body">
                        <p class="text-muted">Identifiant
                        <input type="identifiant" class="form-control" placeholder="Votre identifiant" name="login" pattern="{3,20}"></p>
                         <p class="text-muted">Mot de passe
                         <input type="password" class="form-control" placeholder="Votre mot de passe" name="mdp" pattern="(?=.*\d)(?=.*[0-9]).{6,}"></p>
                         <h5 class="text-muted"><input type="checkbox" class="checkbox" />Se souvenir de moi</h5>
                         <p><a data-toggle="modal" data-target="#modalInscription" class="link_inscription">Pas encore dans la famille ? Inscrivez-vous</a></p>
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
                          <div class="row">
                              <div class="col-xs-6 col-md-6">
                                  <input class="form-control" name="firstname" placeholder="First Name" type="text"required autofocus />
                              </div>
                              <div class="col-xs-6 col-md-6">
                                  <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                              </div>
                          </div>
                          <input class="form-control" name="pseudo" placeholder="Your Pseudo" type="text" />
                          <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                          <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                          <input class="form-control" name="password" placeholder="New Password" type="password" />                          
                          <input class="form-control" name="telephone" placeholder="Your phone" type="telephone" />
                          <input class="form-control" name="Codepostale" placeholder="Your postalcode" type="text" />
                          <input class="form-control" name="country" placeholder="Your Country" type="text" />
                          <label for="">
                              Birth Date</label>
                          <div class="row">
                              <div class="col-xs-4 col-md-4">
                                  <select class="form-control">
                                      <option value="Month">Month</option>
                                  </select>
                              </div>
                              <div class="col-xs-4 col-md-4">
                                  <select class="form-control">
                                      <option value="Day">Day</option>
                                  </select>
                              </div>
                              <div class="col-xs-4 col-md-4">
                                  <select class="form-control">
                                      <option value="Year">Year</option>
                                  </select>
                              </div>
                          </div>
                          <label class="radio-inline">
                              <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                              Male
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                              Female
                          </label>
                          <br />
                          <br />
                          <button class="btn btn-lg btn-primary btn-block" type="submit">
                              Sign up</button>
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