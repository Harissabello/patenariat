<?php
include('connect.php');
if(isset($_POST["nom"])){
    $noms =  htmlspecialchars(addslashes($_POST["nom"]));
    $prenom = htmlspecialchars(addslashes($_POST["prenoms"]));
    $email = $_POST["email"];
    $mot = $_POST["motDepasse"];
    $mott = $_POST["mdp"];
    $pay = htmlspecialchars(addslashes($_POST["pays"]));
    $cont = htmlspecialchars(addslashes($_POST["contact"]));
    $rol = $_POST["roles"];




// if(filter_var($email,FILTER_VALIDATE_EMAIL))
// {
// echo 'Email Valide' ;	
// }	
// else
// {
// 	echo'Email n\'est pas Valide';
// }

            $sql = "INSERT INTO `users`(nom, prenoms, email, motDepasse, mdp, pays, contact, roles)
             VALUES('$noms', '$prenom', '$email', '$mot', '$mott', '$pay', '$cont', '$rol')";
             
              if(mysqli_query($conn, $sql)){
                echo json_encode(['succes_msg' => 'User a été enregistrer']);
            
              }else{
                echo "error: ". $sql . "<br>" .mysqli_error($conn);
              }
              mysqli_close($conn);
        }
    
?>