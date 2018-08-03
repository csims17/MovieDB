<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>




<h1 align=center><?php echo $movie['title'] ?></h1>

<p align=center><i><?php echo $movie['description'] ?></i></p>

<p>
<?php echo 'Length of this movie: ' . $movie['minutes'] . " minutes" ?>
</p>

<p>
<?php echo 'Release Date: ' . $movie['releaseDate'] ?> 
</p>

<p> 
<?php while ($genre = $genres->fetch_assoc()) 
	{echo "Genre(s) for this movie: ". $genre["genre"];} 
?>
</p> 

<p align=center><?php 
   if (! is_null($movie["link"])) {  
    	echo '<iframe width="560" height="315" src='. $movie['link'] . 'frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    }
 ?></p>

<p align=center><a href=<?php echo URL_ROOT . "Movie/edit/?id=" . $movie['id'] ?>>Edit Movie</a></p>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>


