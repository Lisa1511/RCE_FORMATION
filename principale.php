<?php
    session_start();
    //Rediriger vers la page de connexion si l'utilisateur ne s'est pas connecté au préalable
    
    if(empty($_SESSION['user'])){
        echo "<script>
            alert('Vous n\'êtes pas connecté ! Vous serez redirigé');
            window.location.href='./viewLogin.php';
            </script>";
    }else{
        echo("<h3>Bienvenue sur votre tableau de bord</h3>");
        echo("<br/>Vous êtes connecté en tant que <strong>".$_SESSION['user']['userEmail']."</strong>"); 
    }
    

?>