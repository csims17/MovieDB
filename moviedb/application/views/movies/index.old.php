<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>

<a href=></a>
<h1>MovieDB All Movies</h1>

<?php if ($movies->num_rows > 0) : ?>
    <ul class="list-group">
        <?php while($movie = $movies->fetch_assoc()) : ?>
            

        <li class="list-group-item">
            <?php include CURR_VIEW_PATH . DS . "movies" . DS . "show.php"; ?>
        </li>
        <?php endwhile ?>
    </ul>
<?php else: ?>
    <p>0 results</p>
<?php endif ?>
<?php /*
        echo "<ul class='list-group'>";
        while($movie = $movies->fetch_assoc()) {
            echo "<li class='list-group-item'></li>";
        	//echo "<li class='list-group-item' >";
        	//include CURR_VIEW_PATH . DS . "movies" . DS . "show.php";
            //echo "</li>";
        }
        echo "</ul>";
        
    } else {
        echo "<p>0 results</p>";
    }
    */
?>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>