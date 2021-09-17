<!--
    Programmed By: DJ Booker
    Sept 9, 2021
    This page will handle the user creating a account and add it to the database 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Action</title>
</head>


<body>
    <?php
    // Variable to hold the output message
    $outputMessage = " ";

    // Check to see if passwords match
    // If they do the input is saved
    if (empty($_GET["uName"])) {
        $outputMessage = "You must enter a username";
        echo $outputMessage;
    } elseif (empty($_GET["passwd"]) || empty($_GET["passwd2"])) {
        $outputMessage = "Please Enter a password!";
        echo $outputMessage;
    } elseif ($_GET["passwd2"] != $_GET["passwd"]) {
        $outputMessage = "Please make sure both passwords match!";
        echo $outputMessage;
    } else {
        echo "Your username: " . $_GET["uName"] . "<br/>";
        echo "First Password: " . $_GET["passwd"] . "<br/>";
        echo "Second Password: " . $_GET["passwd2"] . "<br/>";
    }
    ?>
</body>

</html>