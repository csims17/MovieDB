<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>
<br>
<form method="post" action=<?php echo "'" . URL_ROOT . "Movie/create" . "'" ?> >
	<input type="hidden" name="id" value=<?php echo "'"  . "'" ?> >
	<div class="form-group">
		<label for="inputTitle">Title</label>
    	<input type="text" class="form-control" name="title" id="inputTitle" value=<?php echo "'"  . "'" ?>  required>
	</div>
	<div class="form-group">
		<label for="inputDescription">Description</label>
    	<input type="text" class="form-control" name="description"  id="inputDescription" value=<?php echo "'"  . "'" ?>  required>
	</div>
	<div class="form-group">
		<label for="inputReleaseDate">Release Date</label>
    	<input type="date" class="form-control" name="releaseDate"  id="inputReleaseDate" value=<?php echo "'"  . "'" ?>  required>
	</div>
	<div class="form-group">
		<label for="inputMinutes">Minutes</label>
    	<input type="number" class="form-control" name="minutes"  id="inputMinutes" value=<?php echo "'" . "'" ?> required>
	</div>
	<div class="form-group">
		<label for="inputLink">YouTube Video Link Extension</label>
    	<input type="text" class="form-control" name="link" id="inputLink" value=<?php echo "'"  . "'" ?>>
	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>
