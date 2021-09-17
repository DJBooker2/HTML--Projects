<!--
    Programmed By: DJ Booker
    Sept 12, 2021
    This php action will handle the user querying the entire database
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Decryption</title>
</head>

<body>
     <?php 
     echo "You would like to decrypt the file ".$_GET["fileToDecrypt"]."?";
     echo "<br/>";
     echo "Your decryption code is: " . $_GET["key"];
     ?>

</body>

</html>