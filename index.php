<?php
    require_once "../../Controller/UserController.php";
    if(isset($_POST['name']) && isset($_POST['pname']) && isset( $_POST['mail']) && isset($_POST['mdp'])){
      $name = $_POST['name']; 
      $pname = $_POST['pname']; 
      $mail = $_POST['mail']; 
      $mdp = $_POST['mdp']; 
      $usr = new user($name,$pname,$mail,"Membre",$mdp);
      $usrc = new userC();
      $usrc->inscrire($usr);
      echo "here";
    }
    else if(isset( $_POST['mail']) && isset($_POST['mdp'])){
      $mail = $_POST['mail']; 
      $mdp = $_POST['mdp']; 
      $usr1 = new user(null,null,$mail,"Membre",$mdp);
      $usr = new userC();
      $usr->connx($usr1);
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PALESTINEPULSE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/flag.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Vendor CSS Files -->
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <img src="img/flag.jpg" id="flag" alt="" srcset="" width="40px" height="30px">

      <h1 class="logo me-auto"><a href="index.html">PALESTINEPULSE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Actualités</a></li>
          <li><a class="nav-link scrollto" href="#team"> Histoire</a></li>
          <li><a class="getstarted scrollto" href="#contact">s'inscrire</a></li>
          <li><a class="getstarted scrollto" href="#clients"> Connexion</a></li>
          <li><div id="myid"></div></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/kid.PNG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Les Enfants de Palestine  <br><span style="color: red;">Victimes</span> de la Guerre et de la Misère ...


              </h2>
              <p class="animate__animated animate__fadeInUp">
                Les enfants palestiniens endurent des souffrances indicibles, confrontés à la violence et à la privation au quotidien. Leurs droits fondamentaux sont souvent bafoués, et leur enfance est volée par les conflits qui ravagent la région. Il est urgent d'agir pour mettre fin à cette tragédie et garantir un avenir meilleur pour ces jeunes vies.
              </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus..</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/bk.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Gaza-Tunis, <span style="color: red;">le coeur</span> battant  <br>pour la Palestine              </h2>
              <p class="animate__animated animate__fadeInUp">Depuis plus de 40 jours,
                 le monde a - encore une fois - les yeux rivés sur la Palestine.
                  La bande de Gaza croule sous les bombes israéliennes, les morts se multiplient et dans le reste du monde, les narratives s’affrontent. Mais à Tunis, la cause palestinienne fait consensus et résonne. 
              </p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus..</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/fd.PNG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Les <span style="color: red;">bombes </span>israéliennes continuent <br>de pleuvoir sur Gaza</h2>
              <p class="animate__animated animate__fadeInUp">De nouveaux bombardements de l’armée israélienne sur la bande de Gaza ont fait des dizaines de morts jeudi, selon le Hamas, deux jours après l’élimination d’un haut dirigeant du mouvement islamiste palestinien au Liban, qui fait craindre un embrasement dans la région.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus..</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-info-circle"></i></div>
              <h4 class="title"><a href="">Actualités </a></h4>
              <p class="description">Nous vous proposons une couverture complète de toutes les actualités concernant la Palestine.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-history"></i></div>
              <h4 class="title"><a href="">Ressources Historiques et Culturelles</a></h4>
              <p>Nous vous offrons une exploration approfondie de la culture et de l'histoire de la Palestine.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-comments-o"></i></div>
              <h4 class="title"><a href="">Engagement Communautaire </a></h4>
              <p class="description">Nous mettons à votre disposition un forum de discussion pour échanger et partager vos opinions sur la Palestine.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>A PROPOS</h2>
          <p> Le partage d'informations sur la guerre en Palestine vise à créer un mouvement mondial en faveur de la paix et de la justice, contribuant ainsi à mettre fin au conflit .</p>
          <br><br><br>
           
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="img/P.PNG" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Bienvenue sur  <span style="color:green;">PalestinePulse !</span></h3>
            <p class="fst-italic">


                     Votre source fiable pour les dernières actualités sur la situation en Palestine, en particulier dans le
              contexte du conflit en cours. En tant que blog spécialisé, nous nous engageons à vous fournir des
              informations précises et à jour sur les développements politiques, économiques et sociaux qui affectent la
              région. <br><br>
              De plus, notre site offre des ressources sur l'emplacement géographique de la Palestine ainsi qu'un aperçu
              de son histoire, vous permettant de mieux comprendre le contexte dans lequel les événements se déroulent.
              Rejoignez notre communauté et explorez les nuances de ce conflit complexe tout en accédant à des
              informations essentielles sur la géographie et l'historique de la Palestine."
            </p>
            <br>
            <p>Connectez-vous dès maintenant pour rester informé en temps réel et rejoignez notre forum de discussion
              pour partager vos opinions, vos perspectives et échanger avec d'autres membres de la communauté sur les
              questions liées à la Palestine.





            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- loaclisation  -->
    <div class="map">
    <div class="col-lg-5 d-flex align-items-stretch">
      <div class="info">
        <div class="address">
          
         <center> 
          
          
          <h4> <i class="bi bi-geo-alt" style="color: green;"></i>Localisation:
          Palestine</h4>
        </center>
        </div>



        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867266.9977728397!2d34.892076!3d31.88589545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151cf2d28866bdd9%3A0xee17a001d166f686!2sPalestine!5e0!3m2!1sfr!2stn!4v1713486287480!5m2!1sfr!2stn" style="border:0; width: 700px; height: 490px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>

      </div>

    </div>
    </div>
    <!--end location-->

    


   
    <!-- ======= actualite Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Actualités</h2>
          <p>Vous pouvez consulter les dernières nouvelles concernant la Palestine et le conflit en cours.</p>
         
        </div>

        <div class="row">


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box iconbox-blue">
              <img src="img/d.PNG" alt="" width="400px" height="250px">
              
              <h4><a href="">L’ONU lance un appel aux <br> dons pour la Palestine</a></h4>
              <p>Après six mois de guerre entre Israël et le Hamas, l'ONU lance un appel au don pour venir en aide aux palestiniens et en particulier aux gazaouis.</p>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <img src="img/a.PNG" alt="" width="400px" height="250px">

              
              <h4><a href="">Guerre Israël-Hamas, jour 195 : les opérations israéliennes à Gaza ont créé un « enfer humanitaire »</a></h4>
<p>L’ONU a dénoncé la situation des 2,4 millions de Palestiniens endurant « la mort, la destruction, le déni d’aide humanitaire vitale », et la faim.</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <img src="img/q.PNG" alt="" width="400px" height="250px">

              
              <h4><a href="">Guerre Israël-Hamas : le mouvement palestinien dit étudier un projet de trêve dans la bande de Gaza, comprenant la libération de dizaines d’otages</a></h4>
<p>Le mouvement palestinien a déclaré qu’il « informera[it] les médiateurs de sa réponse », tout en précisant que les Israéliens « n’avaient répondu à aucune » de leurs demandes.

</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <img src="img/gaza.PNG" alt="" width="400px" height="250px">

              
              <h4><a href="">A Gaza, «au moins, on mourra tous ensemble»</a></h4>
<p>Assiégés et sans espoir, les civils palestiniens de la bande de Gaza craignent une offensive terrestre israélienne. Témoignages</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <img src="img/o.PNG" alt="" width="400px" height="250px">


              <h4><a href="">Guerre Israël-Palestine : six mois de tragédie pour les  Palestiniens</a></h4>
<p>Il y a plus de six mois, l’interminable conflit entre Israël et l’État de Palestine a pris une tournure dramatique.

</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <img src="img/az.PNG" alt="" width="400px" height="250px">

              
              <h4><a href="">Conflit au Proche-Orient : "Il ne reste plus qu'à prier pour nous", confient des habitants de Rafah toujours sous la menace d'une offensive israélienne
              </a></h4>
<p>Une femme et son enfant marchent dans le camp de déplacés à Rafah, au sud de la bande de Gaza, le 14 avril 2024. (AFP)</p>            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="background-image:url(y.PNG);" style="  opacity: 0.5;">
      <div class="container">

        <div class="row">
          <center>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#clients">Rejoignez notre communauté</a></div>
        </div>
      </center>

      </div>
    </section><!-- End Cta Section -->

    


    <!-- ======= Historique Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>
            L'histoire de la Palestine </h2>
            <p>Les Fondations de la Palestine : Une Histoire Ancienne et Complexes Tissée de Cultures et de Conflits</p>
          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="img/dd.PNG" alt="" width="400px" height="240px">
              <h4>Conflit territorial</h4>
              
              <p> La création de l'État d'Israël en 1948 a entraîné le déplacement de centaines de milliers de Palestiniens de leurs foyers, créant ainsi un conflit territorial profondément enraciné. Les Palestiniens se sont opposés à la création d'un État juif en Palestine, tandis que les Israéliens ont revendiqué leur droit à un État souverain sur leur terre ancestrale.</p>
              

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="img/g.jpg" height="240px" width="400px" alt="">
              <h4> Revendications historiques et religieuses  </h4>
              
              <p>
                Les revendications historiques et religieuses sur la terre de Palestine sont une source de conflit perpétuel entre les communautés juive et arabe. Jérusalem, en particulier, revêt une importance religieuse capitale pour les Juifs, les chrétiens et les musulmans, et sa souveraineté est au cœur du conflit.
              </p>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="img/yasser.PNG" alt="" width="300px" height="240px">
              <h4> <EM style="color: red;">YASSER ARAFET</EM> Figure emblématique du mouvement nationaliste palestinien</h4>
              <p>
                Yasser Arafat, a fondé l'OLP en 1964. Son rôle central dans le conflit israélo-palestinien, ses efforts diplomatiques comme les accords d'Oslo en 1993, ont fait de lui une figure polarisante, admirée pour sa lutte pour l'indépendance palestinienne et critiquée pour ses méthodes controversées. Son héritage incarne les aspirations nationales palestiniennes et les défis pour une paix durable.              </p>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= inscrir Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Inscrivez-vous maintenant</h2>
          
        </div>
        <br>
        <div class="row" style="margin-left: 400px;">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre nom</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Votre prenom</label>
                  <input type="text" class="form-control" name="pname" id="pname" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Votre Email</label>
                <input type="email" class="form-control" name="mail" id="mail" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" id="mdp" required>
              </div> <br><br>
              
              <div class="text-center"><button type="submit">Inscrivez-vous !</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



     <!-- ======= Our Clients Section ======= -->
     <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Connectez-vous</h2>
          <p>Connectez-vous dès maintenant pour rester informé en temps réel et rejoignez notre forum de discussion .</p>
        </div>



        <div class="ins">
          

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
              
              
            </div>
            <div class="form-group mt-3">
              <label for="name">Votre Email</label>
              <input type="email" class="form-control" name="mail" id="mail" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">Mot de passe</label>
              <input type="password" class="form-control" name="mdp" id="mdp" required>
            </div> <br><br>
            
            <div class="text-center"><button type="submit" id="cnxBtn">Connectez-vous !</button></div>
          </form>
        </div>
      </div>


        

      </div>
    </section><!-- End Our Clients Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h4>PALESTINEPULSE</h4>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>PALESTINEPULSE</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/glightbox.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  <!--Multilingue-->
  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

        <script>
        
            function loadGoogleTranslate()
        
            {
                new google.translate.TranslateElement("myid")
            }
        
        </script>
  

</body>

</html>