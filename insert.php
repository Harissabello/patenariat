<?php
include('connect.php');
if(isset($_POST["submit"])){
    $dom = addslashes($_POST["dom"]);
    $bud = addslashes($_POST["budget"]);
    $mes = addslashes($_POST["message"]);
    $obj = addslashes($_POST["object"]);
    session_start();
    $userID = $_SESSION['id_user'];

    $target_dir = "imagess5/";
    $target_file = $target_dir . basename($_FILES["profil"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
      $check = getimagesize($_FILES["profil"]["tmp_name"]);
      if($check !== false) {
        echo "c'est bien une image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "le fichier est different d'une image.";
        $uploadOk = 0;
      }
      // renomer l'image
    $temp = explode(".", $_FILES["profil"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = $target_dir .$newfilename;
    
    if($uploadOk == 0){
        echo"image non enregistre";
    
    }else{
        if(move_uploaded_file($_FILES["profil"]["tmp_name"],"" . $finaldestination)) {
            
            $sql = "INSERT INTO `sponsor`(domaine, messages, objectif, photo, budget, user_id)
             VALUES('$dom', '$mes', '$obj', '$finaldestination', '$bud', '$userID')";
             header("location:pubinvest_profile.php");
            //  echo $sql;
    
        }
        if(mysqli_query($conn, $sql)){
          echo "succes";
        }else{
          echo "error: ". $sql . "<br>" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    }
?>