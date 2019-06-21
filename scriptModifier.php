<?php
require_once 'connexion.php';
if(isset($_POST['Modifier'])){
    if(!empty($_POST["nom"]) and
        !empty($_POST["postnom"])and
        !empty($_POST["prenom"])and
        !empty($_POST["nomdupere"])and
        !empty($_POST["nomdelamere"])and
        !empty($_POST["nationalite"])and
        !empty($_POST["sexe"])and
        !empty($_POST["datenaissance"])and
        !empty($_POST["lieuNaissance"])and
        !empty($_POST["codeEtudiant"])and
        !empty($_POST["promotion"])

    ) {

        /* RECUPERATION DE VALEUR DE LA FORMULAIRE  PAR LA METHODE POST*/

        $nom=$_POST["nom"]; $postnom=$_POST["postnom"]; $prenom=$_POST["prenom"]; $nomdupere=$_POST["nomdupere"];
        $nomdelamere=$_POST["nomdelamere"]; $nationalite=$_POST["nationalite"]; $sexe=$_POST["sexe"];
        $datenaissance=$_POST["datenaissance"];
        $codeEtudiant=$_POST["codeEtudiant"];
        $promotion=$_POST["promotion"];
        $lieuNaissance=$_POST["lieuNaissance"];
        $idEtu=$_POST["idEtu"];

        $requette=$sql->prepare('UPDATE etudiant SET idEtu=:idEtu,nom=:nom,postnom=:postnom,prenom=:prenom,
                                    sexe=:sexe,dateNaiss=:dateNaiss,lieuNaiss=:lieuNaiss,nompere=:nompere,nomMere=:nomMere,
                                    nationalite=:nationalite,codeEtudiant=:codeEtudiant,promotion=:promotion WHERE idEtu=:idEtu');
        $requette->execute(array(
            'idEtu'=>$idEtu,
            'nom'=>$nom,
            'postnom'=>$postnom,
            'prenom'=>$prenom,
            'sexe'=>$sexe,
            'dateNaiss'=>$datenaissance,
            'lieuNaiss'=>$lieuNaissance,
            'nompere'=>$nomdupere,
            'nomMere'=>$nomdelamere,
            'nationalite'=>$nationalite,
            'codeEtudiant'=>$codeEtudiant,
            'promotion'=>$promotion

        ));

        header('Location: etudiant.php?resultat=3');

    }else{
        header('Location: etudiant.php?resultat=4');
    }

}
