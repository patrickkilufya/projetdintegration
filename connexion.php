<?php

try{
    $sql=new PDO('mysql:host=localhost;dbname=webisp','root','');
    //echo "Connexion etabli";
}catch (Exception $exception ){
    die('Erreur de la connexion: '.$exception->getMessage());
}



