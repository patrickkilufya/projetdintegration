<?php
session_start();
    require_once 'connexion.php';
    $resultat=isset($_GET['resultat'])? $_GET['resultat'] : '';


?>
<!doctype html>
<html>
      <head>
          <title>projet d integration</title>
          <meta charset="UTF-8">
          <meta http-equiv="Accept-Charset">
          <link href="css/bootstrap-theme.css" rel="stylesheet"/>
          <link href="css/bootstrap-theme.min.css" rel="stylesheet">
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet">
          <script src="js/bootstrap.min.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1" />

      </head>
<body>
<div class="logo">
        <div  class="container"><h2>Projet <spam> d'integration</spam></h2></div>

    <div class="navbar-wrapper">
    <div class="container">
    <nav class="navbar navbar-inverse navbar-static-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">projet d integration</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Projet d'integration</a>
            </div>

            <div id="navbar"class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">acceuil</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Espace Etudiant<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php

                                if(!empty($_SESSION['noms'])){
                                    $type=$_SESSION['type'];
                                    switch ($type){
                                        case'etudiant' :echo'afficheHoraire.php';
                                            break;
                                        default: echo'login.php?login1';
                                    }

                                }else{
                                    echo'login.php?login1';
                                }?>">Horaire de cours</a></li>
                            <li><a href="#">Resultat</a></li>
                            <li><a href="envoi.php">Projet et TP</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Espace Prof<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php

                                if(!empty($_SESSION['noms'])){
                                   $type=$_SESSION['type'];
                                   switch ($type){
                                       case'enseignat' :echo'afficheHoraire.php';
                                       break;
                                       default: echo'login.php?login1';
                                   }

                                }else{
                                    echo'login.php?login1';
                                }?>">Horaire de cours</a></li>
                            <li><a href="envoi.php">Depot Traveaux</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inscription<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logup.php">Inscription site</a></li>
                            <li><a href="ficheinscription.php">Inscription New Etudiant</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php if(!empty($_SESSION['noms']))
                            {echo $_SESSION['noms'];}
                            else{ echo 'Non Identifier';}?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php if(!empty($_SESSION['noms']))
                            {echo '<li><a href="#">Profif</a></li>
                                    <li><a href="logout.php">Deconnexion</a></li>'; }
                            else{echo '<li><a href="login.php">Connexion</a></li>'; }?>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    </div>
    </div>
    </div>

<div class="home">
<div></div>




    <div class="col-lg-12">
        <div class="well"></div>

        <div class="col-lg-12">
            <!-- carrousel-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/g3.jpg" alt="First slide" width="100%" height="250">
                    </div>
                    <div class="item">
                        <img src="images/3.png" alt="Second slide" width="100%">
                    </div>
                    <div class="item">
                        <img src="images/3.png" alt="Third slide" width="100%">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--fin carrousel-->
        </div>
        <div class="col-lg-12">
            <div class="well"></div>
        </div>

       <div class="col-lg-4">

        <div class="block-3">
            <div class="block-3-left">
                <div class="historique-img">

                </div>
                <div class="bienvenue-text banner-bottom-grid-box3">
                    <h3 class="banner-bottom-grid-box1">HISTORIQUE ISP </h3>
                    <p align="justify">En 1959, naissance de l’école Normale Moyenne (EMN) dénommée Institut Saint Jérôme à Lubumbashi (Elisabethville). L’initiateur est le RP GUILBERT (O.S.B, ordre de saint Benoît) qui devient le premier directeur de l’établissement.
                    En 1963, le RP. Pierre GODENIR (O.S.B) succède au R.P J.C GUILBERT à la direction de l’ENM.

                    En 1964, l’Institut Saint Jérôme devient une Ecole Supérieur Pédagogique (ISP) et par la suite un Institut Supérieur Pédagogique (I.S.P.) de Lubumbashi.


                    <div class="wine-comments">
                        <div class="wine-left">
                            <ul>
                                <li><a href="#"><i class="heart"> </i>01</a></li>
                                <li><a href="#"><i class="cmnt"> </i> 12</a></li>
                            </ul>
                        </div>
                        <div class="wine-right">
                            <a class="popup-with-zoom-anim no-bagr" href="#small-dialog2">Continue Reading</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>


        </div>
       </div>
        <div class="col-lg-4 banner-bottom-grid">

            <div class="banner-bottom-grid1">
                <img src="images/1.jpg" width="100%" alt=" " class="img-responsive" />
                <h3>EVENEMENT DU G3 RT</h3>
                <p></p>
            </div>

            <div>
                <h1 class="titre1">Promotion</h1>
                <div class="nav_promotion">
                    <img src="images/2.jpg"
                         width="100%" class="text-center center-block"/>
                </div>
            </div>

        </div>

        <div class="col-lg-4 banner-bottom-grid">
            <div class="banner-bottom-grid-box banner-bottom-grid-boxs1">
                <h1 class="titre2">Connexion</h1>
                <div class="promotion">
                    <form class="form-signin" action="login_text.php" method="post">
                        <label for="inputEmail" class="sr-only">Utilisateur</label>
                        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus><br/>
                        <label for="inputPassword" class="sr-only">Mot de passe</label>
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"  value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class=" text-center btn btn-sm btn-success"  name="login1" type="submit">Valider</button>
                    </form>
                </div>
                </div>
        <br/>

            <div class="nav_promotion">
                <h1 class="titre2">Evenement</h1>
                <p>Journée Poste Ouvert</p>
                <p>Informatique Demo</p>
                <p>Vente Videotheque</p>

            </div>
            <div class="banner-bottom-grid-box banner-bottom-grid-boxs1">
                <div class="banner-bottom-grid-box1 banner-bottom-grid-box1-sub">
                    <h2></h2>
                    <p></p>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="col-lg-12">



            <div class="col-lg-2 col-md-2 col-sm-2">


            </div>
            <div>
</div>



    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body
</html>
<?php
