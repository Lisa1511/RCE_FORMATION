<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> RCE Formation - Erreur de connexion</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <?php
    if (isset($_GET['error'])) {
        echo '<p class="error">' . $_GET['error'] . '</p>';
    }
    ?>
    <a href="login.php">Retour à la page de connexion</a>
</body>
</html>
