<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>
<br>
<form method="post" action=<?php echo "'" . URL_ROOT . "Movie/update" . "'" ?> >
	<input type="hidden" name="id" value=<?php echo "'" . $movie['id'] . "'" ?> >
	<div class="form-group">
		<label for="inputTitle">Title</label>
    	<input type="text" class="form-control" name="title" id="inputTitle" value=<?php echo "'" . $movie['title'] . "'" ?>  required>
	</div>
	<div class="form-group">
		<label for="inputDescription">Description</label>
    	<input type="text" class="form-control" name="description"  id="inputDescription" value=<?php echo "'" . $movie['description'] . "'" ?>  required>
	</div>
	<div class="form-group">
		<label for="inputReleaseDate">Release Date</label>
    	<input type="date" class="form-control" name="releaseDate"  id="inputReleaseDate" value=<?php echo "'" . $movie['releaseDate'] . "'" ?>  required>
	</div>
	<div class="form-group">
		<label for="inputMinutes">Minutes</label>
    	<input type="number" class="form-control" name="minutes"  id="inputMinutes" value=<?php echo "'" . $movie['minutes'] . "'" ?> required>
	</div>
	<div class="form-group">
		<label for="inputLink">YouTube Video Link Extension</label>
    	<input type="text" class="form-control" name="link" id="inputLink" value=<?php echo "'" . $movie['link'] . "'" ?>>
	</div>
  	<button type="submit" class="btn btn-primary">Update</button>
</form>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>

