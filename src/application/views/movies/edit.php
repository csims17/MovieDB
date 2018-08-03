<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>

<pre>
	<?php print_r($movie) ?>
</pre>

<form>
	<div class="form-group">
		<label for="inputTitle">Email address</label>
    	<input type="email" class="form-control" id="inputTitle1" ???? f placeholder=<?php echo $movie['title'] ?>>
	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>

