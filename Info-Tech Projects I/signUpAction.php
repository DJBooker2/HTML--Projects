<!--
    Programmed By: DJ Booker
    Sept 9, 2021
    This page will 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Action</title>
</head>


<body>


    <?php
    // Check to see if passwords match
    // If they do the input is saved
    if ($_GET["passwd2"] != $_GET["passwd"]) {
        echo "Please make sure both passwords match!";
    } else {
        echo "Your username: " . $_GET["uName"] . "<br/>";
        echo "First Password: " . $_GET["passwd"] . "<br/>";
        echo "Second Password: " . $_GET["passwd2"] . "<br/>";
    }
    ?>
</body>

</html>