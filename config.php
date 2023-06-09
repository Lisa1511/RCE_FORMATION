<?php
//Fichier de connexion à la base de données basket

try {
    $database = new PDO("mysql:host=localhost;dbname=login",'root','');
    $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : ".$e->getMessage());
}





?>