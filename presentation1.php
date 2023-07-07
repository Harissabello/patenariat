<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Financeproject</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="css/style.css"> 
  <!-- Favicons -->
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

</head>
<body>


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

      <h1 class="logo me-auto"><a href="index.php">Financeproject</a></h1>
      <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Déconne</span>xion</a>

    </div>
  </header>
<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..."/>
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->

<section class="single-block-wrapper section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="single-post">
    <div class="post-header mb-5 text-center">
        <div class="meta-cat">
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">Health ,</a>
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"  href="#">lifestyle</a>
        </div>
        <section class="d-flex align-items-center">
    <div class="container">
      <h2>Description du projet</h2>
    </div>
  </section>

  <?php
    if(isset($_GET["id"])){
        $id= $_GET["id"];
    }
    
    $req ="SELECT * FROM `sponsor` WHERE id = $id";
    $result = mysqli_query($conn, $req);
    $hari = mysqli_fetch_assoc($result);

    
    ?>
        <div class="post-meta">
            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by Liam</span>
            <span class="text-uppercase font-sm letter-spacing-1">January 17,2019</span>
        </div>
        <div class="post-featured-image mt-5">
            <img src="<?=$hari['imagepub']?>" class="img-fluid w-100" alt="featured-image">
        </div>
    </div>
    <div class="post-body">
        <div class="entry-content">
            <div width="900" height="120"><?=$hari['descriptions']?></div>
          <h2 class="mt-4 mb-3">Besoin pour le projet</h2>
          <div width="900" height="120" ><?=$hari['messages']?></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="<?=$hari['imagepub1']?>" alt="post-ads" class="img-fluid mr-4 w-100">
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="<?=$hari['imagepub']?>" alt="post-ads" class="img-fluid mr-4 w-100">
                </div>
            </div>
            <h3 class="mt-5 mb-3">Mon parcours d'entrepeneur</h3>

            <div width="900" height="120"><?=$hari['parcours']?>. </div>
        </div>
    </div>
</div>


   <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch position-relative">
            <video width="380" height="540" controls>
              <source src="<?=$hari['video']?>" type="video/mp4">
              Votre navigateur ne supporte pas la balise vidéo.
            </video> 
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>À propos de mon projet</h3>
            <div width="900" height="120"><?=$hari['descriptions']?></div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Titre du Projet</a></h4>
              <p class="description"><?=$hari['nom']?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Domaine du projet</a></h4>
              <p class="description"><?=$hari['dom']?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">E-mail</a></h4>
              <p class="description"><?=$hari['email']?></p>
            </div>
          </div>

        </div>
        
        <section id="Nos collaborateurs" class="doctors">
      <div class="container">

      </div>
    </section>
   <!-- End Doctors Section  -->
      </div>
    </section>



	<form class="comment-form mb-5 gray-bg p-5" id="comment-form">
		<h3 class="mb-4 text-center">laisse un commentaire</h3>
		<div class="row">
			<div class="col-lg-12">
				<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Commentaire"></textarea>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input class="form-control" type="text" name="name" id="name" placeholder="Nom:">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
				</div>
			</div>
		</div>

		<input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Soumettre Message">
	</form>

			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="sidebar sidebar-right">
					<div class="sidebar-wrap mt-5 mt-lg-0">
	<div class="sidebar-widget about mb-5 text-center p-5">
		<div class="about-author">
			<img src="<?=$hari['profil']?>" alt="" class="img-fluid">
		</div>
    <p>publié par :</p>
		<h4 class="mb-0 mt-2"><?=$hari['noms']?> <?=$hari['prenom']?></h4>
		<h5>Domaine: <?=$hari['dom']?></h5>
		<p><?=$hari['parcours']?></p>
	</div>

	

</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!--footer start-->
<?php
include("footer.php");
?>
<!--footer end-->

<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<!-- Owl caeousel -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/slick-carousel/slick.min.js"></script>
<script src="plugins/magnific-popup/magnific-popup.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed-js/instafeed.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="js/custom.js"></script>

<?php
 mysqli_close($conn);    
    ?>
</body>
</html>