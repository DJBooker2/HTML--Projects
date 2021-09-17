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

    // Message output based on output
    $message = " ";
    if ($_GET["passwd2"] != $_GET["passwd"]) {
        echo "Please make sure both passwords match!";
    } else {
        echo $_GET["uName"] . "<br/>";
        echo $_GET["passwd"] . "<br/>";
        echo $_GET["passwd2"] . "<br/>";
    }
    ?>
</body>

</html>