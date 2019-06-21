<?php

    require_once 'connexion.php';
    $idEtu=isset($_GET['idEtu'])? $_GET['idEtu'] : '';
    $nom=isset($_GET['nom'])? $_GET['nom'] : '';
    $postnom=isset($_GET['postnom'])? $_GET['postnom'] : '';
    $prenom=isset($_GET['prenom'])? $_GET['prenom'] : '';
    $sexe=isset($_GET['sexe'])? $_GET['sexe'] : '';
    $dateNaiss=isset($_GET['dateNaiss'])? $_GET['dateNaiss'] : '';
    $lieuNaiss=isset($_GET['lieuNaiss'])? $_GET['lieuNaiss'] : '';
    $nompere=isset($_GET['nompere'])? $_GET['nompere'] : '';
    $nomMere=isset($_GET['nomMere'])? $_GET['nomMere'] : '';
    $nationalite=isset($_GET['nationalite'])? $_GET['nationalite'] : '';
    $codeEtudiant=isset($_GET['codeEtudiant'])? $_GET['codeEtudiant'] : '';
    $promotion=isset($_GET['promotion'])? $_GET['promotion'] : '';
?>




    <?php

    /*switch ($resultat){
        case 1:
            echo "<div class='error'>Enregistrement Echouer Tout le champs ne sont pas Remplir Veuillez Remplir le Champs Obligatoir:</div>";
            break;
        case 2:
            echo "<div class='success'><h3>Enregistrement Effectuer...</h3></div>";
            break;

    }
    */?>

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
                                <li class=""><a href="index.php">acceuil</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Espace Etudiant<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Horaire de cours</a></li>
                                        <li><a href="#">Resultat</a></li>
                                    </ul>
                                </li>
                                <li><a href="">images</a></li>
                                <li><a href="">telechargement</a></li>
                                <li><a href="">connexion</a></li>
                            </ul>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>

    <div class="home">
        <div></div>
        <div class="container">
            <div class="col-lg-6">
    <form method="post" action="scriptModifier.php">
    <input type="hidden" name="idEtu" class="form-control" placeholder="Id Etudiant" value="<?php echo $idEtu; ?>"/><br>
    <input type="text"name="nom" class="form-control" placeholder="Nom" value="<?php echo $nom; ?>"/><br>
    <input type="text"name="postnom" placeholder="Post-Nom"class="form-control" value="<?php echo $postnom; ?>" /><br>
    <input type="text"name="prenom" placeholder="Prenom"class="form-control" value="<?php echo $prenom; ?>" /><br>
    <select type="text"name="sexe" placeholder="Sexe"class="form-control value="<?php echo $dateNaiss; ?>">
        <option>Masculin</option>
        <option>Femimin</option>
        <option>Autre</option>
    </select><br>
    <label>Date de Naissance</label>
    <input type="text"name="datenaissance" placeholder="date de naissance"class="form-control" value="<?php echo $dateNaiss; ?>"  /><br>
    <input type="text"name="lieuNaissance" placeholder="Lieu de Naissance"class="form-control"  value="<?php echo $lieuNaiss; ?>"/><br>
    <input type="text"name="nomdupere" placeholder="Nom du Pere"class="form-control"  value="<?php echo $nompere;?>"/><br>
    <input type="text"name="nomdelamere" placeholder="Nom de la Mere"class="form-control" value="<?php echo $nomMere; ?>" /><br>
    <input type="text"name="nationalite" placeholder="nationalite"class="form-control"  value="<?php echo $nationalite;?>"/><br>
    <input type="text"name="codeEtudiant" placeholder="Code Etudiant"class="form-control" value="<?php echo $codeEtudiant;?>" /><br>
    <input type="text"name="promotion" placeholder="Promotion"class="form-control" value="<?php echo $promotion;?>" /><br><h>
        <input type="submit" value="Modifier" name="Modifier" class="btn btn-primary">
        <input type="reset" value="annuler" class="btn btn-warning"></h>
</form>
</div>
</div>
</div>

