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
  <link rel="stylesheet" href="assets/css/login.css">


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
   <form action="inset.php" method="POST" id="loginForm">
        <h2>S'inscrire</h2>
        <div class="card-body" id="formContainer">
            <form id="loginForm">
                <select class="selectt" id="role" name="roles" required>
                    <option selected>Role</option>
                    <option value="0">Porteur de projet</option>
                    <option value="1">Financer un projet</option>
                </select><br><br>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom"><br>
                    <input type="text" class="form-control" placeholder="Prenoms" name="prenoms" id="prenom"><br>
                    <input type="text" class="form-control" placeholder="Pays" name="pays" id="pays"><br>
                    <input type="text" class="form-control" placeholder="contact" name="contact" id="contact"><br>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email"><br><span class="email_feed"></span>
                    <input type="password" class="form-control" placeholder="Mot de passe" name="motDepasse" id="mdp1"><br>
                    <input type="password" class="form-control" placeholder="Confirmer le mot de passe" name="mdp" id="mdp2"><br
                    
            </form>
            <div id="res" style="color: red;"></div>
            <h2 id='result'></h2>
                <span > <a href="" class="formbutto" id="connexion"><button name="submit"  style="border: none; background-color: #1977cc; color: white;">S'inscrire</button></a></span><br>  
                <p><a href="login.php">j'ai déjà un compte ?</a></p>
        </div>
    </form>
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
  <script type="text/javascript" src="js1/jquery-2.1.3.js"></script>
<script type="text/javascript" src="funct.js"></script>

  <script>
    $(document).ready(function(){
        $("#connexion").click(function(e){
            e.preventDefault();
            let emptyInputCount=0;
            
            $("#loginForm input").each(function(){
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
                let getRole = $("#role").val();
                let getNom = $("#nom").val();
                let getPrenom = $("#prenom").val();
                let getPays = $("#pays").val();
                let getContact = $("#contact").val();
                let getEmail = $("#email").val();
                let getmotDePasse = $("#mdp1").val();
                let getmotPasse = $("#mdp2").val();
              
                postObj = {
                    roles: getRole,
                    nom: getNom,
                    prenoms: getPrenom,
                    pays: getPays,
                    contact: getContact,
                    email: getEmail,
                    motDepasse: getmotDePasse,
                    mdp: getmotPasse,
                }

                if (getmotDePasse != getmotPasse) {
                  $('#res').html("Veuillez verifier votre mot de passe !");  
                } else {
                  $.ajax({
                    type: 'POST',
                    url:'inset.php',
                    data:postObj,
                    success: function(data){
                       parseJson = JSON.parse(data);
                          if(parseJson.succes_msg)
                              {
                             window.location.href="login.php";
                             $('#loginForm')[0].reset(); 
                              }   
                    }

                })
                }
             
            }

        });
    });
</script>
</body>

</html>