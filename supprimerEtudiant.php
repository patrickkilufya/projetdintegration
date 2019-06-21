<?php
require_once 'connexion.php';
$idEtu=isset($_GET['idEtu'])? $_GET['idEtu'] : '';


    $requette=$sql->prepare('DELETE FROM `etudiant` WHERE idEtu=:idEtu');
    $requette->execute(array(
        'idEtu'=>$idEtu));
header('Location: index.php?resultat=5');