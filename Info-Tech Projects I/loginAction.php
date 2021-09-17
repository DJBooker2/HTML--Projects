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

        echo "Username is: ".$_GET["uName"];
        echo "<br/>";
        echo "Password is: ". $_GET["passwd"];

        /*
        Edited By: Mackinnon Jackson
        Date Last Edited: 9/15/2021
        Purpose: To add in each user
       
        include_once 'My_DB_Functions.php';

        // Connect to database
        My_Connect_DB();

        // The query looks through the entire table to make a total amount of rows
        $query = "select * from $db_tablename";
        $res = $db->prepare($query);
        $res->execute();
        $num = $res->rowCount();

        //  Both the username and password gets added into the sql statement to be executed
        $username = $_GET['uName'];
        $password = $_GET['passwd'];
        $sql = "INSERT INTO users(userID,username,password) values($num,'" . $username . "','" . $password . "')";

        $result = $db->prepare($sql);
        $result->execute();



        echo "Added user";

        echo "$num";
        */

        ?>
</body>

</html>