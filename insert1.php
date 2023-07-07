<?php

include('connect.php');

if(isset($_POST["submit"])){
    $nom = $_POST["noms"];
    $prenom = $_POST["prenom"];
    $habitatio = $_POST["habitation"];
    $noms = $_POST["nom"];
    $email = $_POST["email"];
    $cont = $_POST["contact"];
    $par = addslashes($_POST["parcours"]);
    $part = addslashes($_POST["dom"]);
    $mess = addslashes($_POST["messages"]);
    $desp = addslashes($_POST["descriptions"]);

    $image3 = $_FILES['profil']['name'];
    $tempname3 = $_FILES['profil']['tmp_name'];
    $temp3 = explode(".", $_FILES["profil"]["name"]);
    $newfilename3 = round(microtime(true)) . '.' .end($temp3);
    $finaldestination3 = "imagess4/".$newfilename3;  
    $folder3 = "imagess4/".$newfilename3;
    if(move_uploaded_file($tempname3,$folder3)){
        echo 'images est uplade';
    }


    $image = $_FILES['imagepub']['name'];
    $tempname = $_FILES['imagepub']['tmp_name'];
    $temp = explode(".", $_FILES["imagepub"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = "imagess1/".$newfilename;  
    $folder = "imagess1/".$newfilename;
    if(move_uploaded_file($tempname,$folder)){
        echo 'images est uplade';
    }



    $image1 = $_FILES['imagepub1']['name'];
    $tempname1 = $_FILES['imagepub1']['tmp_name']; 
    $temp1 = explode(".", $_FILES["imagepub1"]["name"]);
    $newfilename1 = round(microtime(true)) . '.' .end($temp1);
    $finaldestination1 = "imagess2/".$newfilename1; 
    $folder1 = "imagess2/".$newfilename1;
    if(move_uploaded_file($tempname1,$folder1)){
        echo 'images est uplade';
    }

    
    

        // Spécifier le répertoire où stocker le fichier téléversé
        ini_set('upload_max_filesize', '100M');
        // Spécifier le répertoire où stocker le fichier téléversé
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['video']['name']);
        $uploadPath = $uploadDir . $fileName;
        
        // Déplacer le fichier téléversé dans le répertoire spécifié
        if (move_uploaded_file($_FILES['video']['tmp_name'], $uploadPath)) {
          echo "La vidéo a été téléversée avec succès !";
        
        }

            
            $sql = "INSERT INTO `projet`(noms, prenom, habitation, nom, email, contact, parcours, dom, messages, descriptions, profil, imagepub, imagepub1, dates, video) 
            VALUES ('$nom', '$prenom', '$habitatio', '$noms', '$email', '$cont', '$par', '$part', '$mess', '$desp', '$finaldestination3', '$finaldestination', '$finaldestination1', NOW(), '$uploadPath')";
             header("location:pubprojet_profile.php");
            //  echo $sql;
        if(mysqli_query($conn, $sql)){
          echo "succes";
        }else{
          echo "error: ". $sql . "<br>" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    
?>