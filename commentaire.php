<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=commentaires;charset=utf8', 'root','');
}
catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}

//Ecriture de la requête
$sqlQuery = 'INSERT INTO commentaires(title, describe, author, is_enabled) VALUES (:title, :describe, :author, :is_enabled)';

//Préparation
$insertCommentaires = $db->prepare($sqlQuery);

//Exécution ! Le commentaire est en bdd
$insertCommentaires->execute([
    'title' => 'Formidable',
    'describe' => 'Formation géniale, apprentissage de façon ludique',
    'author' => 'contributeur@exemple.com',
    'is_enabled' => 1, //1 = vrai, 2=faux
]);