<?php
session_start();
include('connect.php');
if(isset($_POST["roles"]) && isset($_POST["email"]) && isset($_POST["motDePasse"])){
$roles = $_POST["roles"];
$email = $_POST["email"];
$motDePasse = $_POST["motDePasse"];

// @$roles = 0;

if($email!="" && $motDePasse!="" && $roles == "1"){
 
  $sql="SELECT * FROM users WHERE email='$email' AND motDePasse='$motDePasse' AND roles='$roles'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $id_session = $row['id_user'];
    $_SESSION["id_user"] = $id_session;
    echo json_encode(['success_msg' => 'User a été enregistrer']);
   
  }

}
elseif($email!="" && $motDePasse!="" && $roles == "0"){
  $email = $_POST["email"];
  $motDePasse = $_POST["motDePasse"];
  $roles = $_POST["roles"];
  $sql1="SELECT * FROM users WHERE email='$email' AND motDePasse='$motDePasse' AND roles='$roles'";
  $result1 = $conn->query($sql1);

  if($result1->num_rows > 0){
    $rows = $result1->fetch_assoc();
    $id_sessions = $rows['id_user'];
    $_SESSION["id_user"] = $id_sessions;
    echo json_encode(['succes_msg' => 'User a été enregistrer']);
  }
}
else {
  echo json_encode(['suces_msg' => 'User n a pas été enregistrer']);
}
$conn->close();
}
?>






