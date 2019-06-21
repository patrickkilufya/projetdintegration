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
    <div class="container">
    <div class="nav_promotion">
        <h1 class="titre2">OPERATION ADMINISTRACTIVE</h1>
        <p><a href="ajouterHoraire.php">Ajouter Horaire</a></p>
        <p><a href="ajouterHoraire.php">Afficher liste Prof</a></p>
        <p><a href="ajouterHoraire.php">Afficher liste Etudiant</a></p>
        <p><a href="ajouterHoraire.php">Cotes des etudiant avec leur Nom</a></p>
        <p><a href="ajouterHoraire.php">votre inspiration</a></p>


    </div>

    <div class="banner-bottom-grid-box banner-bottom-grid-boxs1">
        <div class="banner-bottom-grid-box1 banner-bottom-grid-box1-sub">
            <h2></h2>
            <p></p>
        </div>
    </div>
        <?php
            include_once 'etudiant.php';
        ?>
</div>
</div>