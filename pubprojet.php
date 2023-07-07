<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Financeproject</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Financeproject</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Déconne</span>xion</a>

    </div>
  </header><!-- End Header -->

    <!-- ======= Appointment Section ======= -->
     <div> </div>
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Porteur de Projet</h2>
        </div>

        <form action="insert1.php" method="POST" class="php-email-form"  enctype="multipart/form-data">
          <div class="row">
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="noms"  id="nom" placeholder="Entrer votre Nom" >
            <div class="validate"></div>
           </div>
           <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="prenom"  id="nom" placeholder="Entrer votre Prenom" >
            <div class="validate"></div>
           </div>
           <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="habitation"  id="nom" placeholder="Entrer votre Lieu d'habitation" >
            <div class="validate"></div>
           </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="nom"  id="nom" placeholder="Nom du projet" >
            <div class="validate"></div>
           </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact" >
            <div class="validate"></div>
           </div>

           <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
            <div class="validate"></div>
           </div>

          <div class="col-md-4 form-group mt-3 mt-md-0">
          <label>Photo Profile</label>
            <input type="file" class="form-control" name="profil">
            <div class="validate"></div>
           </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
          <label>Image Projet 1</label>
            <input type="file" class="form-control" name="imagepub">
            <div class="validate"></div>
           </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label>Image Projet 2</label>
            <input type="file" class="form-control" name="imagepub1"  id="imagepub1"   value="">
            <div class="validate"></div>
           </div>
           <div class="form-group mt-3">
          <label>Domaine</label>
            <textarea class="form-control" name="dom" rows="" placeholder=""></textarea>
            <div class="validate"></div>
          </div>
          <div class="form-group mt-3">
          <label>Description du projet</label>
            <textarea class="form-control" name="descriptions" rows="5" placeholder="Decrire ton projet"></textarea>
            <div class="validate"></div>
          </div>
          <div class="form-group mt-3">
          <label>Besoin pour réalisation du projet</label>
            <textarea class="form-control" name="messages" rows="5" placeholder=""></textarea>
            <div class="validate"></div>
          </div>
          <div class="form-group mt-3"> 
          <label>Parcours d'entrepeneur</label>
            <textarea class="form-control" name="parcours" rows="5" placeholder=""></textarea>
            <div class="validate"></div>
          </div>
          <div class="form-group mt-3"> 
          <label>Mettre une vidéo</label>
          <input name="video" type="file" multiple />
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Envoi...</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" name="submit">Envoyer</button></div>
        </form>
      </div>
    </section><!-- End Appointment Section -->
    

  <!-- ======= Footer ======= -->
  <?php
  include("footer.php");
  ?><!-- End Footer -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
  <!-- pour la video -->
<script>
  // Initialisez Dropzone sur le formulaire avec l'ID "my-awesome-dropzone"
  Dropzone.options.myAwesomeDropzone = {
    paramName: "file", // Le nom du champ qui contiendra le fichier sur le serveur
    maxFilesize: 10, // Taille maximale autorisée pour les fichiers (en Mo)
    acceptedFiles: 'video/*', // Type de fichiers autorisés (ici, uniquement les fichiers vidéo)
    addRemoveLinks: true // Afficher les liens pour supprimer les fichiers téléversés
  };
</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>