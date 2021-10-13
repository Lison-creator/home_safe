<!-- faut-il créer une page et/ou uniquement un imageUploaderController mais qui ne figure nulle part ? ? -->


<?php
/* https://www.w3schools.com/php/php_file_upload.asp */

/* $target_dir = "uploads/" - specifies the directory where the file is going to be placed */

$target_dir = "uploads/"; /* TODO changer du coup le dossier et/ou en créer un */

//$target_file specifies the path of the file to be uploaded
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//$uploadOk=1 is not used yet (will be used later)
$uploadOk = 1;

//$imageFileType holds the file extension of the file (in lower case)
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

//TODO vérifier si l'image existe déjà

//TODO vérifier la taille des images

//TODO vérifier le type d'image


?>
