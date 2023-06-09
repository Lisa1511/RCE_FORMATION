<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name = 'login';
    $db_host = 'localhost';
    $db = new mysqli($db_host, $db_username, $db_password, $db_name);
    
    // Vérification de la connexion à la base de données
    if ($db->connect_errno) {
        die('Could not connect to database');
    }

    // Sanitization des entrées
    $username = $db->real_escape_string(htmlspecialchars($_POST['username']));
    $password = $db->real_escape_string(htmlspecialchars($_POST['password']));
    
    if ($username !== "" && $password !== "") {
        // Requête préparée avec paramètres liés
        $query = "SELECT count(*) FROM utilisateur WHERE nom_utilisateur = ? AND mot_de_passe = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count != 0) {
            // Nom d'utilisateur et mot de passe corrects
            $_SESSION['username'] = $username;
            header('Location: principale.php');
            exit();
        } else {
            // Utilisateur ou mot de passe incorrect
            header('Location: login.php?erreur=1');
            exit();
        }
    } else {
        // Utilisateur ou mot de passe vide
        header('Location: login.php?erreur=2');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>