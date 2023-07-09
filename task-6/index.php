<?php

$maxFileSize = 8 * 1024 * 1024; 
$validExtensions = ['pdf', 'docx', 'jpg'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $files = $_FILES['files'];
  $totalFiles = count($files['name']);

  for ($i = 0; $i < $totalFiles; $i++) {
    $fileName = $files['name'][$i];
    $fileSize = $files['size'][$i];
    $fileTmpName = $files['tmp_name'][$i];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $validExtensions)) {
      echo "Invalid file extension for file {$fileName}. Only PDF, Word, and JPG files are allowed.<br>";
      continue;
    }

    if ($fileSize > $maxFileSize) {
      echo "File {$fileName} is too large. Maximum file size is 8 megabytes.<br>";
      continue;
    }

    $destination = "uploads/{$fileName}";

    if (move_uploaded_file($fileTmpName, $destination)) {
      echo "File {$fileName} has been uploaded successfully.<br>";
    } else {
      echo "Error uploading file {$fileName}.<br>";
    }
  }
}
?>

<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="files[]" multiple>
  <input type="submit" value="Upload">
</form>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>




    
</body>
</html>