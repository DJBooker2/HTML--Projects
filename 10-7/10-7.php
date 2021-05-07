<?php
	echo "<h1>Thank you for taking the servey</h1>";
    echo "<h2>Below are your answers to the survey questions:</h2>";
    
    echo "Your favorite web site: " .$_POST["website"]."<br>";
    echo "Your favorite color: " .$_POST["color"]."<br><br>";
    echo "Your least favorite color: " .$_POST["nocolor"]."<br><br>";
    echo "Your favorite day in a year: " .$_POST["day"]."<br><br>";
    echo "Your lucky number form 0 to 10: " .$_POST["luckynumber"]."<br><br>";
    echo "Your height: " .$_POST["feet"]. " feet " .$POST["inches"]. "inches.<br><br>";
    echo "Your satisfaction with this web site: " .$_POST["score"]."<br><br>";
    
    echo "<h3>Your opinion avour classes:</h3>";
    echo "I like classes starting at 8am: " .$_POST["morning"]."<br><br>";
    echo "I like evening classes: " .$_POST["evening"]."<br><br>";
