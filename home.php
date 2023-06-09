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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> RCE Formation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<?php include_once('login.php'); ?>
    <!--électrocardiogramme
    <div class="container">
        <div class="grid">
            <div class="col-10_sm-12">PATIENT ID #1888450</div>
            <div class="col-2_sm-12">12/04/18 20:15</div>
        </div>
    </div>

    <div class="container">
        <div class="grid">
            <div class="col-10_sm-12 graph">

                <div class="cell cell-1"></div>
                <div class="cell cell-2"></div>
                <div class="cell cell-3"></div>
                <div class="cell cell-4"></div>
                <div class="cell cell-5"></div>
                <div class="cell cell-6"></div>

            </div>

            <div class="col-2_sm-12">
                <div class="number-1"><span>&#9829;</span></div>
            </div>
        </div>
    </div>

    <svg width="0" height="0" class="filters">
        <defs>
            <filter id="filter0_dd" x="0.858887" y="28.9809" width="644.262" height="124.108" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="2"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.215686 0 0 0 0 0.686275 0 0 0 0 0.549902 0 0 0 1 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="4"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.215686 0 0 0 0 0.686275 0 0 0 0 0.54902 0 0 0 1 0"/>
                <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
            </filter>
        </defs>
    </svg>-->
    <!--logo-->
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <!--menu-->
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="accueil.html">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Accueil</span>
                </a>
            </li>
            <li class="list">
                <a href="sst.html">
                    <span class="icon">
                        <ion-icon name="medkit-outline"></ion-icon>
                    </span>
                    <span class="title">SST</span>
                </a>
            </li>
            <li class="list">
                <a href="incendie.html">
                    <span class="icon">
                        <ion-icon name="flame-outline"></ion-icon>
                    </span>
                    <span class="title">Incendie</span>
                </a>
            </li>
            <li class="list">
                <a href="gesteposture.html">
                    <span class="icon">
                        <ion-icon name="body-outline"></ion-icon>
                    </span>
                    <span class="title">Geste et posture</span>
                </a>
            </li>
            <li class="list">
                <a href="conception.html">
                    <span class="icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </span>
                    <span class="title">Conception de formation</span>
                </a>
            </li>
        </ul>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
        item.addEventListener('click',activeLink));
    </script>
    
    <!--caroussel-->
    <!--image slider start-->
    <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <img src="secourismecaroussel1.png" alt="">
            </div>
            <div class="slide">
                <img src="secourismecaroussel2.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="secourismecaroussel3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="secourismecaroussel4.jpg" alt="">
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);
    </script>
    <!--bloc-->
    <div id="bloc">
        <p><h1><center>RCE Formation</center></h1></p>
        <p>Lorem ipsum dolor sit amet. Aut dolorum voluptatem aut pariatur quia ab illo
            fuga ut dolorem asperiores quo rerum autem. Ea velit nesciunt hic odit nulla 
            eum necessitatibus obcaecati est veniam veritatis At rerum Quis et eligendi 
            animi. A ullam dolorum est voluptate saepe eum similique quos et assumenda 
            delectus. </p>
            <p>Ad ipsa cumque sit fuga enim et maiores ducimus. A sunt
            perferendis ea ducimus ducimus vel sequi maxime aut labore itaque et voluptas
            nihil? </p>
            <p>Et minima ipsum sit consectetur quis cum architecto assumenda.
            Et sunt nihil qui odit dolor qui commodi dolorem qui reiciendis commodi
            eum aspernatur dolorem?
        </p>
    </div>
</body>
</html>





<!--SST: diplome (programme complet de la formation, minimum 4 personnne max 10) pas de locaux donc au sein des etp, 
Incendie : attestation ~ (on verra plus tard), manip extincteur, 
geste et posture : attestation, comment faire pour que les salariés partent en meilleur forme à la retraite, adapté le travail à l'homme et être formé pour ne pas faire les mauvais gestes, deverouillage articulaire, positionnement pendant le travail, explications os, comment s'étirer fin de journée
conception de formation : . (mnte un projet pour les gens), sur devis (1journée de 8h : 1000€)
INRS
-->