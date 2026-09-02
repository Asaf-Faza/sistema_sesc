    <link rel="stylesheet" href="../output.css">
<?php
$target_dir = "./";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "<p class='font-semibold'>Sua imagem já existe, nego. se fode aí.</p><br/>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<p class='font-semibold'>Desculpe, mas aceitamos apenas imagens com, no máximo, 5MB.</p><br/>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<p class='font-semibold'>Desculpe, aceitamos apenas imagens com formato PNG, JPEG ou JPG.</p><br/>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<p class='font-semibold'>Desculpe, ocorreu um erro inesperado e sua imagem não foi enviada</p><br/>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p class='font-semibold'>O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado com sucesso!</p><br/>";
        header("Location: ../../index.php");
        // echo "File is an image - " . $check["mime"] . ".";
        exit;
    } else {
      echo "<p class='font-semibold'>Desculpe, ocorreu um erro inesperado e sua imagem não foi enviada</p><br/>";
    }
}
?>