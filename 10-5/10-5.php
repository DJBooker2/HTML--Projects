<?php
	echo "<h1> Thank you for your registration </h1>";
    if ( $_POST["password"] != $_POST["repassword"] )
    {
    	echo "Your password do not match.<br>";
        exit();
    }
    
    echo "<h2>Your personal information:</h2>";
    echo "Your student ID: " .$_POST["studentId"]."<br>";
    echo "Your first name: " .$_POST["fname"]."<br>";
    echo "Your last name: " .$_POST["lname"]."<br>";
    echo "Your email: " .$_POST["emial"]."<br>";
    echo "Your phone number: " .$_POST["phone"]."<br>";
    echo "Your street: " .$_POST["street"]."<br>";
    echo "Your city: " .$_POST["city"]."<br>";
    echo "Your state: " .$_POST["state"]."<br>";
    echo "Your zip: " .$_POST["zip"]."<br>";
    echo "Your Level at GGC: " .$_POST["level"]."<br>";
    
    echo "<h2>Your IT preferences:</h2>";
    if ( isset($_POST["ownComputer"]) && $_POST["ownComputer"] == "yes")
    {
    	echo "You own a computer.<br>";
    }
    
    echo "You use a computer " . $_POST["time"] . " a day.<br>";
    echo "Your favorite computer brand: " . $_POST["computer"] . "<br>";
    
    echo "Your Favorite web browser: <br>";
    if ( isset($_POST["ie"]) && $_POST["ie"] == "yes")
    {
    	echo "Internet Explorer <br>";
    }
    if ( isset($_POST["firefox"]) && $_POST["firefox"] == "yes")
    {
    	echo "Firefox <br>";
    }
     if ( isset($_POST["chrome"]) && $_POST["firefox"] == "yes")
    {
    	echo "Chrome <br>";
    }
     if ( isset($_POST["safari"]) && $_POST["safari"] == "yes")
    {
    	echo "Safari<br>";
    }
    echo "<br>";    
    echo "Your Major consentration: " .$_POST["major"]. "<br>";    
    echo "<br>";
    echo "Click <a ref = '10-9.html'>here</a> to sign in.";
