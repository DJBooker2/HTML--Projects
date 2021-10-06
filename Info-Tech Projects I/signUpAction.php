<!--
    Programmed By: DJ Booker
    Sept 9, 2021
    This page will handle the user creating a account and add it to the database 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign-Up Action</title>
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

        $db_hostname = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_dbname = 'Crypt';
        $db_tablename = 'UserAccounts';
        $db_conn_str = "mysql:host=$db_hostname;dbname=$db_dbname";
        $db = new PDO($db_conn_str, $db_username, $db_password);

        $query = "select * from $db_tablename";

        $res = $db->prepare($query);
        $res->execute();
        $num = $res->rowCount();

        $username = $_GET['uName'];
        $password = $_GET['passwd'];

        $sql = "INSERT INTO UserAccounts(UserID,Username,Password) values($num,'" . $username . "','" . $password . "')";

        $result = $db->prepare($sql);
        $result->execute();
    }
    ?>
    <?php
     header("Location: http://localhost/My%20Code/HTML--Projects/Info-Tech%20Projects%20I/Login.html", true, 301);
        exit;
    ?>
</body>

</html>

/**
    // Check for username taken
    $result = mysqli_query($conn, $queryUname);
    echo $result;
    if (mysqli_num_rows($result) >= 1) {
        echo "Please Create A Account to begin Encrypting Files!!";
    } else {
        header("Location: http://localhost/My%20Code/HTML--Projects/Info-Tech%20Projects%20I/Homepage.html", true, 301);
        exit;
    }
 */