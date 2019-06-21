<?php
require_once 'connexion.php';

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

    /*INSERTION DE DONNEE DANS LA TABLE ETUDIANT PAR UNE REQUETTE PREPARER*/

      $requette=$sql->prepare('INSERT INTO etudiant(nom, postnom, prenom, sexe, dateNaiss,
    lieuNaiss, nompere, nomMere, nationalite, codeEtudiant, promotion)
    VALUES (:nom,:postnom,:prenom,:sexe,:dateNaiss,:lieuNaiss,:nompere,
    :nomMere,:nationalite,:codeEtudiant,:promotion)');

    $requette->execute(array(
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
        'promotion'=>$promotion,

    ));

    ?>
    <script>
        alert('Enregistrement Reussi');

    </script>

    <?php
    header('Location: administrateur.php?resultat=2');


}else{

    echo" <script>
        alert('Enregistrement Echouer');
        
    </script> ";
    header('Location: administrateur.php?resultat=1');
}
