<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>


<h1>
	<?php echo $movie['title'] ?>
</h1>

<p>
	<?php echo $movie['description'] ?>
</p>
<?php 
    if (! is_null($movie["link"])) {
    	echo '<iframe width="560" height="315" src=' . $movie['link'] . ' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    }
 ?>
<br>
<a class="btn btn-primary d-inline-block" href=<?php echo URL_ROOT . "Movie/edit/?id=" . $movie['id'] ?>>Edit Movie</a>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>



