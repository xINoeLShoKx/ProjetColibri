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
                        <a href="Compte_utilisateur.php">Mon compte</a>

                    </li>
                    <li>
                        <!-- Trigger the modal with a link -->
                        <a href="Session_Destroy.php">Deconnexion</a>
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
  

<!-- fin PANNEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELS -->

<!-- PANIEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEERS -->

<div class="row" style="margin-top: 75px;">
<div class="col-lg-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panier Carnivore</h3>
  </div>
  <div class="panel-body">
    - Viande <br>
    - Viande <br>
    - Viande <br>
    - Viande <br>
    - Viande <br>
    <div class="text-center" style="margin-top: 20px;"><a href="commande.php"><button type="button" class="btn btn-primary outline" style="margin-bot: 20px;">Commander</button></a></div>
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panier Herbivore</h3>
  </div>
  <div class="panel-body">
    - Herbe <br>
    - Herbe <br>
    - Herbe <br>
    - Herbe <br>
    - Herbe <br>
    <div class="text-center" style="margin-top: 20px;"><a href="commande.php"><button type="button" class="btn btn-primary outline" style="margin-bot: 20px;">Commander</button></a></div>
  </div>
</div>
</div>

<div class="col-lg-4">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Panier Omnivore</h3>
  </div>
  <div class="panel-body">
    - Viande <br>
    - Herbe <br>
    - Herbe <br>
    - Viande <br>
    - Herbe <br>
    <div class="text-center" style="margin-top: 20px;"><a href="commande.php"><button type="button" class="btn btn-primary outline" style="margin-bot: 20px;">Commander</button></a></div>
  </div>
</div>
</div>
</div>

</div><!-- /.container -->

<!-- fin PANIEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEERS -->


 <div class="logo_home_page">
                <img src="img/amap_logo.png" style="width: 300px;"> 
                </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">Groupe 4 - MSIA15 Nanterre &copy;</p>
                </div>
            </div>
        </div>
    </footer>
   
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