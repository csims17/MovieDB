<?php
    //echo "<h3>" . "id: " . 			 $movie["id"] . 			"</h3>";
    echo "<h1>" . $movie["title"] . "</h1>";
    echo "<p>"  . $movie["description"] . 	"</p>";
    echo "<p>"  . "release date: " . $movie["releaseDate"] . 	"</p>";
    echo "<p>"  . "length: " . 		 $movie["minutes"] . 		" min </p>";
    if (! is_null($movie["link"])) {
        echo "<a href=" . $movie["link"] . ">link </a>";
    }
?>