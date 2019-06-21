<?php
session_start();

require_once 'connexion.php';


if(isset($_POST['login1'])){

if(!empty($_POST["username"]) and !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        $connecte = $sql->query("select * from user where username='$username' and password='$password'");

        while ($reponse = $connecte->fetch()) {

            echo $reponse['noms'];
            $nomuser = $reponse['noms'];
            $typeUser = $reponse['typeUser'];
        }

        $_SESSION['noms'] = $nomuser;
        $_SESSION['type'] = $typeUser;
        switch ($typeUser){
            case 'admin': header('Location: administrateur.php?controle=1');
                break;
            case 'etudiant':header('Location: index.php?controle=1');
                break;
            case 'enseignant':header('Location: index.php?controle=1');
                break;
            default: header('Location: login.php?controle=3');
        }
        $connecte->closeCursor();
        header('Location: index.php?controle=1');
    } catch (Exception $e) {
        echo $e.header('Location: index.php?controle=2');
    }


}
else{
    header('Location: index.php?controle=2');
}

}if (isset($_POST['login2'])) {
    if(!empty($_POST["username"]) and !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        try {
            $connecte = $sql->query("select * from user where username='$username' and password='$password'");

            while ($reponse = $connecte->fetch()) {

                echo $reponse['noms'];
                $nomuser = $reponse['noms'];
                $typeUser = $reponse['typeUser'];
            }

            $_SESSION['noms'] = $nomuser;
            $_SESSION['type'] = $typeUser;
            $connecte->closeCursor();
            switch ($typeUser){
                case 'admin': header('Location: administrateur.php?controle=1');
                break;
                case 'etudiant':header('Location: index.php?controle=1');
                break;
                case 'enseignant':header('Location: index.php?controle=1');
                break;
                default: header('Location: login.php?controle=3');
            }

        }

        catch (Exception $e) {
            echo $e.header('Location: index.php?controle=2');
        }
        } else {
            header('Location: index.php?controle=2');
        }

    }