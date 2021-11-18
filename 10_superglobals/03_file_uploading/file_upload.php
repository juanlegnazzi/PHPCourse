<?php

// 1. Add enctype="multipart/form-data" to form

// Create $errorMessage variable
$errorMessage = '';

// Check if file was uploaded and save it locally
if(isset($_FILES['file'])){
  //   echo '<pre>';
  //   var_dump($_FILES);
  //   echo '</pre>';

  $file = $_FILES['file'];
  $ext = pathinfo($file['name'], PATHINFO_EXTENSION); // Get the file extension
  $ext = strtolower($ext); //  Convert $ext into lowercase

  // Check if the file size is more than 5MB and show error
  if ($file['size'] > 5 * 1024 * 1024) {
    $errorMessage = 'You can not upload more than 5MB files';
  } elseif (!in_array($ext,['png', 'jpeg','svg', 'jpg'])) {
    $errorMessage = 'You can only upload images';
  } else {
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
  }

}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p><?php echo $errorMessage ?></p>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file"><br>
  <button>Submit</button>
</form>
</body>
</html>
