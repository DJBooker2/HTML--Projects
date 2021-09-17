<!--
    Programmed By: DJ Booker
    Sept 10, 2021
    This php action will handle the user querying the entire database
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Encryption</title>
</head>

<body>
     <?php
      echo "The file you would like to encrypt is ".$_GET["fileToUpload"];
      echo "<br/>";
      echo "The encryption type is: " .$_GET["encryptType"]; 
      ?>
</body>
