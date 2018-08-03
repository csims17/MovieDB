<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>

<pre>
	<?php print_r($actor) ?>
</pre>


<h1>
	<?php echo $actor['title'] ?>
</h1>

<p>
	<?php echo $actor['description'] ?>
</p>
<?php 
    if (! is_null($actor["link"])) {
    	echo '<iframe width="560" height="315" src=' . $actor['link'] . ' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    }
 ?>

<a href=<?php echo URL_ROOT . "actor/edit/?id=" . $actor['id'] ?>>Edit Actor</a>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>