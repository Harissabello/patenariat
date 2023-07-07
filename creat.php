<?php
include("connect.php");

// sql to create table

// $sql = "CREATE TABLE users (
//   id int(11) PRIMARY KEY AUTO_INCREMENT,
//   nom varchar(255) NOT NULL,
//   prenoms int(11) NOT NULL,
//   email varchar(255) NOT NULL,
//   contact int(11) NOT NULL,
//   roles varchar(255) NOT NULL,
//   motDepasse varchar(255) NOT NULL,
//   mdp varchar(255) NOT NULL,
//   pays varchar(255) NOT NULL

//   )";

//ajouer un champ
// $sql = " ALTER TABLE projet 
// ADD noms varchar(255) NOT NULL,
// ADD prenom varchar(255) NOT NULL
// ";

$sql = " ALTER TABLE projet 
ADD habitation varchar(255) NOT NULL
";

// $sql = "TRUNCATE TABLE users ";

if ($conn->query($sql) === TRUE) {
  echo "champ ajoter avec success";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>