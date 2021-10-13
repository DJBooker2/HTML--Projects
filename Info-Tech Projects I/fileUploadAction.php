<!--
    Programmed By: DJ Booker
    Sept 10, 2021
    This php action will handle the user querying the entire database
-->


<?php
$cookie_name = "user";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Encryption</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    $usernumber = $_COOKIE[$cookie_name];


    $conn = mysqli_connect('localhost', 'root', '', 'Crypt');

    $name = $_FILES['fileup']['name'];


    $destination = 'uploads/' . $name;
    $extension = pathinfo($name, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['fileup']['tmp_name'];
    $size = $_FILES['fileup']['size'];
    $key = $_POST["enkey"];
    $encrpttype = $_POST["list"];
    if (move_uploaded_file($file, $destination)) {
        $sql = "INSERT INTO EncryptedData (UserID, FileNumber, FileName, FileType, EcrptKey, EncryptType) VALUES ('$usernumber', 0,'$file', '$extension', '$key', '$encrpttype')";
        if (mysqli_query($conn, $sql)) {
            echo "File uploaded successfully";
        }
    } else {
        echo "Failed to upload file.";
    }




    echo "The file you would like to encrypt is " . $_POST["fileup"];
    echo "<br/>";
    echo "The encryption type is: " . $_POST["list"];


    ?>
</body>

</html>