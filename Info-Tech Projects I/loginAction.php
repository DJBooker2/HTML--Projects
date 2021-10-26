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
    // Check to see if the fields are empty
    if (empty($_GET["uName"])) {
        $outputMessage = "You must enter a username";
        echo $outputMessage;
    } elseif (empty($_GET["passwd"])) {
        $outputMessage = "Please Enter a password!";
        echo $outputMessage;
    }

    // Check database to see if the username and password exits
    // Query for username and password

    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_dbname = 'Crypt';
    $db_tablename = 'UserAccounts';
    $db_conn_str = "mysql:host=$db_hostname;dbname=$db_dbname";

    try {
        $db = new PDO($db_conn_str, $db_username, $db_password);
        $query = "select * from $db_tablename where Username = ? and Password = ?";
        //echo "$query <br /><br />";
        $result = $db->prepare($query);
        $result->execute(array($_GET['uName'], $_GET['passwd']));
        $num = $result->rowCount();
        //echo "# of rows returned: " . $num;
    } catch (PDOException $e) {
        echo "Error in PDO: " . $e->getMessage();
    }
    if ($num == 0) {
        echo "<p style='color:red'>Login failed!! 
            <br/>
            If you have not created a account please click Sign Up
        <p />";
    } else {
        header("Location: http://localhost/My%20Code/HTML--Projects/Info-Tech%20Projects%20I/Homepage.html", true, 301);
        exit;
    }
    ?>
</body>

</html>