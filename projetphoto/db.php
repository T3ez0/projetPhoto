<?php
$hote='localhost';
$port='3306'; // MySQL
$bd='spectacles';  //On mettra instahess ou projetphoto
$utilisateur='root';
$mdp='';
$dsn='mysql:dbname='.$bd.';host='.$hote.';port='. $port;

try {
    $dbh = new PDO($dsn, $utilisateur,$mdp);
}	
catch (PDOException $e){
    echo 'Connexion échouée : ' . $e->getCode().' - '.$e->getMessage();
}

?>