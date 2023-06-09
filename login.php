<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "
            <script>alert('Erreur : Connexion échouée car les champs sont vides ');</script>
        ";
    } else {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $query = "SELECT name, password FROM utilisateurs WHERE email = :email";
        $select = $database->prepare($query);
        $select->bindParam(':email', $email);
        $select->execute();

        $data = $select->fetch();
        if ($data == false) {
            echo "<script>
                    alert('Désolé, il n\'existe aucun utilisateur avec l\'email " . htmlspecialchars($email) . " !');
                </script>";
        } else {
            $passwordHashed = hash('sha256', $password);
            if ($passwordHashed == $data['password']) {
            
                session_start();
                $_SESSION['utilisateurs'] = [
                    'email' => $email,
                    'password' => $data['password']
                ];
                $name = $data['name'];
                header("Location: accueil.html");
                exit();
            } else {
                echo "<script>alert('Identifiants invalides !');</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Connexion | Entraîneur</title>
</head>
<body>
    <main>
        <div class="imgContent">

        </div>
        <div class="loginForm">
            <h2>Connectez-vous pour accéder à votre Tableau de Bord</h2>
            <form action="login.php" method="post">
                <div><input type="email" name="email" placeholder="Entrez votre adresse mail" autocomplete="off" required="true"></div>
                <div><input type="password" name="password" placeholder="Entrez votre mot de passe" autocomplete="off" required="true"></div>
                <button type="submit" name="login" id="login">Se connecter</button>
                <div class="forgotText">
                    <p><a href="#">Mot de passe oublié ?</a></p>
                </div>
                <div class="registerText">
                    <p><a href="#">Vous n'avez pas de compte ? Inscrivez-vous ici</a></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
