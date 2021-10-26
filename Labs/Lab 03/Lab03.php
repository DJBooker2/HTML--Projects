<?php
	echo "<h1>Thank you for taking the servey</h1>";
    echo "<h2>Below are your answers to the survey questions:</h2>";
    
    echo "Your gender: " .$_POST["sex"]."<br><br>";
    echo "Your age: " .$_POST["age"]."<br><br>";
    echo "Your level: " .$_POST["level"]."<br><br>";
    echo "Your school: " .$_POST["school"]."<br><br>";
    echo "Your score from 0 to 100: " .$_POST["score"]."<br><br>";
    echo "Have your computers been infected by a virus before?";
    if ( isset($_POST["virus"]) && $_POST["virus"] == "yes")
    {
    	echo "Yes<br>";
    }
    if ( isset($_POST["virus"]) && $_POST["virus"] == "no")
    {
    	echo "No<br>";
    }
    
    echo "Your anit-virus software(s): <br>";
    if ( $_POST["Norton"] )
    {
    	echo "Norton<br>";
    }
    if ( $_POST["McAfee"] )
    {
    	echo "McAfee <br>";
    }
     if ( $_POST["Kasperski"] )
    {
    	echo "Kasperski <br>";
    }
     if ( $_POST["AVG"] )
    {
    	echo "AVG<br>";
    }
    if ( $_POST["Avast"] )
    {
    	echo "Avast<br>";
    }
    if ( $_POST["Malwarebytes"] )
    {
    	echo "Malwarebytes <br>";
    }
     if ( $_POST["Bitdefender"] )
    {
    	echo "Bitdefender <br>";
    }
     if ( $_POST["Webroot"] )
    {
    	echo "Webroot<br>";
    }
    if ( $_POST["Trend Micro"] )
    {
    	echo "Trend Micro<br>";
    }
    echo "<br>";    
    
    echo "Your ratings:<br>";
    echo "I know how to create a strong password: " .$_POST["strong"]."<br><br>";
    echo "I know hw to remove a virus from my computer: " .$_POST["virus"]."<br><br>";
    echo "I know how to remove spyware form my computer: " .$_POST["remove"]."<br><br>";
    echo "I know how to secure my wireless network at home: " .$_POST["network"]."<br><br>";
    echo "I know how to protect my personal information when surfing the internet: " .$_POST["surf"]."<br><br>";
?>