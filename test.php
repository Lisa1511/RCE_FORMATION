<?php
try{
    $database = new PDO("mysql:host=localhost,dbname=login",'root','');
}
catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}


?>