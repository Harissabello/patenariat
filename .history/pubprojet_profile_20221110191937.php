<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Financeproject</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.9.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
<?php
if(isset($_GET["id"])) {// s'il y a des éléments 
    $id=$_GET["id"]; //$_GET permet d'envoyer des infos mais ce n'est pas sécurisé
if($id == 1){
  include("presentation.php");
}}
else{
  ?>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +225 000 00000 00
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Financeproject</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Mes Projets</a></li>
          <!-- <li><a class="nav-link scrollto" href="#Nos collaborateurs">Mes Projet</a></li> -->
          <li><a class="nav-link scrollto" href="pubprojet.php">Ajouter un projet</a></li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
 
      <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Déconne</span>xion</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bienvenue,</h1>
      <h2>Découvrez les jeunes entrepreneurs</h2>
      <!-- <a href="#contact" class="btn-get-started scrollto">Connectez-Vous</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3></h3>
              <p></p>
              <div class="text-center">
                <a href="#" class="more-btn"><i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4></h4>
                    <p></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4></h4>
                    <p></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4></h4>
                    <p></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=ukHJ91WVwgo" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>À propos de mon projet</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Titre du Projet</a></h4>
              <p class="description">Reccensement des victimes</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Type/Agriculture</a></h4>
              <p class="description">Crée un robot pour les plantations</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Numéro</a></h4>
              <p class="description">0574196374</p>
            </div>
          </div>

        </div>
        
        <section id="Nos collaborateurs" class="doctors">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <img src="assets/img/doctors/finance.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
                <img src="assets/img/doctors/finance.jpg" class="img-fluid" alt="...">
            </div>
          </div>

        </div>

      </div>
    </section>
   End Doctors Section 
      </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!--<section id="counts" class="counts">-->
    <!--  <div class="container">-->

    <!--    <div class="row">-->

    <!--      <div class="col-lg-3 col-md-6">-->
    <!--        <div class="count-box">-->
    <!--          <i class="bi bi-projector-fill"></i>-->
    <!--          <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>-->
    <!--          <p>Projets déposés</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">-->
    <!--        <div class="count-box">-->
    <!--          <i class="far fa-hospital"></i>-->
    <!--          <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>-->
    <!--          <p>Projet pertinent</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">-->
    <!--        <div class="count-box">-->
    <!--          <i class="fas fa-flask"></i>-->
    <!--          <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>-->
    <!--          <p>Projets réalisés </p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">-->
    <!--        <div class="count-box">-->
    <!--          <i class="fas fa-award"></i>-->
    <!--          <span data-purecounter-start="0" data-purecounter-end="115" data-purecounter-duration="1" class="purecounter"></span>-->
    <!--          <p>Total</p>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section> End Counts Section -->

    <!-- ======= Doctors Section ======= -->
    
    <section id="Nos collaborateurs" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Les Projets</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
        <?php
    $req ="SELECT*FROM projet ORDER BY id DESC";
    $result = mysqli_query($conn, $req);
    
    if(mysqli_num_rows($result) > 0){
     while($hari = mysqli_fetch_assoc($result)){
    ?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?=$hari['profil']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nom du Projet: <?=$hari['nom']?></h4>
                <h6>Domaines</h6>
                <h6><?=$hari['dom']?></h6>
                <!-- <p>Explication du projet</p> -->
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""><i class="ri-linkedin-box-fill"></i></a>
                </div><br> -->
                <a href="presentation.php?id=<?=$hari['id']?>">
                  <button type="button" class="btn btn-primary">Voir plus</button>
                </a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/porteur-de-projet.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nom du Projet</h4>
                 <span>Domaines</span>
                <p>Explication du projet</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div><br>
                <button type="button" class="btn btn-primary">Voir plus</button>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/porteur-de-projet.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nom du Projet</h4>
                <span>Domaines</span>
                 <p>Explication du projet</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div><br>
                <button type="button" class="btn btn-primary">Voir plus</button>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/porteur-de-projet.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nom du Projet</h4>
                <span>Domaines</span>
                 <p>Explication du projet</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div><br>
                <button type="button" class="btn btn-primary">Voir plus</button>
              </div>
            </div>
          </div> -->
          <?php
      }

      }
      mysqli_close($conn);

      ?>
        </div>

      </div>
    </section><!-- End Doctors Section -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">

          <!--<div class="col-lg-4">-->
          <!--  <div class="info">-->
          <!--    <div class="address">-->
          <!--      <i class="bi bi-geo-alt"></i>-->
          <!--      <h4>Location:</h4>-->
          <!--      <p>A108 Adam Street, New York, NY 535022</p>-->
          <!--    </div>-->

          <!--    <div class="email">-->
          <!--      <i class="bi bi-envelope"></i>-->
          <!--      <h4>Email:</h4>-->
          <!--      <p>contact@example.com</p>-->
          <!--    </div>-->

          <!--    <div class="phone">-->
          <!--      <i class="bi bi-phone"></i>-->
          <!--      <h4>Numéro tel:</h4>-->
          <!--      <p>+225 000 00000 00</p>-->
          <!--    </div>-->

          <!--  </div>-->

          <!--</div>-->

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder=" Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Envoi...</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> <!-- End Contact Section -->

  </main> <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Financeproject</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Tel:</strong> +225 0574196374<br>
              <strong>Email:</strong> dianeahodakin@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A Propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Notre Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fiance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Financeproject</span></strong>. Tous les droits sont réservés
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Conçu par <a href="">Reine Ahodakin</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <?php


}
?>

</body>

</html>