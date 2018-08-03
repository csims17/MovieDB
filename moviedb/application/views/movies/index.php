<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>

<a href=></a>
<h1>MovieDB All Movies</h1>
<?php include CURR_VIEW_PATH . 'search' . DS . 'index.php'; ?>
<p></p>
<nav aria-label="Page navigation top">
    <?php echo $paginator->createLinks( $links); ?> 
</nav>
<?php if (count($movies) > 0) : ?>
    <ul class="list-group">
        <?php for ($i=0; $i < count($movies); $i++) : ?>
            <?php $movie = $movies[$i] ?>

            <li class="list-group-item">
                <h3>
                    <a href=<?php echo URL_ROOT . "Movie/show/?id=" . $movie['id'] ?>>
                        <?php echo $movie["title"] ?>
                    </a>
                </h3>
            <?php
                echo "<p>"  . $movie["description"] .   "</p>";
                echo "<p>"  . "release date: " . $movie["releaseDate"] .    "</p>";
            ?>
            </li>
        <?php endfor ?>
    </ul>
    <br>
    <nav aria-label="Page navigation bottom">
        <?php echo $paginator->createLinks( $links); ?> 
    </nav>
    <p align = center> Create a movie yourself! </p>
	<form method="post" action=<?php echo "'" . URL_ROOT . "Movie/create" . "'" ?> >
	<div class="form-group">
		<label for="inputTitle">Title</label>
    	<input type="text" class="form-control" name="title" id="inputTitle"  value=<?php echo "'"  . "'" ?> required>
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

<?php else: ?>
    <p>No movies in db</p>
<?php endif ?>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>