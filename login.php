<?php 
session_start();
if (isset($_SESSION['id_user'])) {
  if ($roles == "0") {
    header("Location: pubprojet_profile.php");
  } else {
    header("Location: pubinvest_profile.php");
  }
  
  }
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
  <link rel="stylesheet" href="assets/css/login.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <!--Header-->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Financeproject</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#home">Accueil</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="index.php#Nos collaborateurs">Nos collaborateurs</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Connectez-</span> Vous</a>

    </div>
  </header><!-- End Header -->
     <form method="POST" id="registrationFrm">
        <h2>Se connecter</h2>
        <div class="card-body" id="formContainer">
            <form method="POST" id="registrationFrm">
                <select class="selectt" name="roles" id="roles">
                    <option selected>Role</option> 
                    <option value="0">Porteur de projet</option>
                    <option value="1">Financer un projet</option>
                </select><br><br>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email"><br>
                <input type="password" class="form-control" placeholder="Mot de passe" id="motDePasse" name="motDePasse" ><br>

                <div id="res" style="color: red;"></div><br>

                <div id="res1" style="color: red;"></div><br>

                <span type="submit" id="connexion" name="connexion"> <a href="" class="formbutto">Connexion</a></span><br> 
                <p><a href="signUP.php"><span>Je m'inscrire</span>?</a></p>
            </form>

        </div>
    </form>
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

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<!-- script Ajax  -->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


<script>
    $(document).ready(function(){
        $("#connexion").click(function(e){
            e.preventDefault();
            let emptyInputCount=0;
            
            $("#registrationFrm input").each(function(){
                var input = $(this);
                if(input.val() == ''){
                    input.css('border-color','red');
                    $('#res').html("Veuillez remplir correctement les champs !");  
                    emptyInputCount = 1;
                }
                else{
                    input.css('border-color','#ced4da');
                }
            });
            
            

            if(emptyInputCount == 0){
                let getRoles = $("#roles").val();
                let getEmail = $("#email").val();
                let getmotDePasse = $("#motDePasse").val();
              
                postObj = {
                    roles: getRoles,
                    email: getEmail,
                    motDePasse: getmotDePasse,
                }
                
                $.ajax({
                    type: 'POST',
                    url:'verify.php',
                    data:postObj,
                    success: function(data){
                        parseJson = JSON.parse(data);

                        if(parseJson.success_msg)
                        {
                          window.location.href="login.php";
                          $('#registrationFrm')[0].reset(); 
                        }
                        else if(parseJson.succes_msg)
                        {
                            window.location.href="pubprojet_profile.php";
                            $('#registrationFrm')[0].reset(); 
                        }
                        else{
                            if (parseJson.suces_msg) {
                                $('#res1').html("Veuillez vérifier votre email ou mot de passe!");   
                            }
                        }
                    }

                })
            }

        });
    });
</script>

</body>

</html>