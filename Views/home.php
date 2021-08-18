

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryFreinds</title>

          <!-- style -->
    <link rel="stylesheet" href="../public/css/home.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>

    <script>
      $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
  });
    </script>

    
</head>
<body>
      <!-- hedear -->
    <nav>
        <ul class="menu">
            <li class="logo"><a href="/Projet_fil_rouge/public/"><i class="fa fa-paw logo-style" aria-hidden="true" ></i>
				<span class="furryfreinds">FurryFreinds</span></a></li>
            <li class="item u"><a href="/Projet_fil_rouge/public/">Accueil</a></li>
            <li class="item u"><a href="/Projet_fil_rouge/public/annonces/ajouter">Publier une annonce</a></li>
            <li class="item u"><a href="/Projet_fil_rouge/public/annonces">Adopter</a></li>

            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>
                

                <li class="item button"><a href="/Projet_fil_rouge/public/users/profil">Profil</a></li>
                <li class="item button secondary"><a href="/Projet_fil_rouge/public/users/logout">Déconnexion</a></li>
                <li class="toggle"><span class="bars"></span></li>
            
            <?php elseif(isset($_SESSION['user']) && !empty($_SESSION['user']['id']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])): ?>
                

                <li class="item button"><a href="/Projet_fil_rouge/public/admin">Admin</a></li>
                <li class="item button secondary"><a href="/Projet_fil_rouge/public/users/logout">Déconnexion</a></li>
                <li class="toggle"><span class="bars"></span></li>

            <?php else:  ?>

            <li class="item button"><a href="/Projet_fil_rouge/public/users/login">Connexion</a></li>
            <li class="item button secondary"><a href="/Projet_fil_rouge/public/users/register">inscription</a></li>
            <li class="toggle"><span class="bars"></span></li>

            <?php  endif; ?>
        </ul>
    </nav>

    <!-- hero -->

    <div id="home" class="hero">
        <div class="home-left">
            <h1>Bienvenue sur FurryFreinds</h1>
            <p>Vous Souhaitez Adopter Un Animal <br> Domestique?</p>
            <p>Ce site est là pour vous y aider !</p>
            
            <div class="btn-hero">
                <a href="/Projet_fil_rouge/public/annonces" class="btn-home b1">Adopter</a>
                <a href="/Projet_fil_rouge/public/annonces/ajouter" class="btn-home b2">Donner</a>

            </div>

            <div class="scroll-downs">
                <div class="mousey">
                  <div class="scroller"></div>
                </div>
              </div>
           
        </div>
        <div class="home-right">
            
        </div>

        
        
    </div>

   


    <?= $contenu ?>

<section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                    <i class="fa fa-paw logo-style" aria-hidden="true" ></i>
				                <span class="furryfreinds">FurryFreinds</span>  
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                        <div class="hr"></div>
                        <h6>Contactez nous pour toute information.</h6>
                        <h6>+212 0612345678<span>|</span>furryfreinds@gmail.com</h6>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-youtube"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fa fa-snapchat"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <p>Copyright &copy; 2021.All Rights Reserved.</p>
    </footer>


 

                                           
<script src="/Projet_fil_rouge/public/js/caroussel.js"></script>



    
    
</body>
</html>