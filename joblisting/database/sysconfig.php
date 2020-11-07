<?php
	
	$mode = "build";

	switch ($mode) {
	    case "build":

		    $url = "http://localhost/IHApp/";
	        echo "Your favorite color is red!";
			define("WEB_URL", $url);

	        break;
	    case "release":

		    $url = "http://localhost/IHApp/";
	        echo "Your favorite color is red!";
			define("WEB_URL", $url);
	    
	        echo "Your favorite color is blue!";
	        break;
	    default:
	        echo "";
	}

echo constant("WEB_URL");
?>