<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>
<?php require_once CORE_PATH . "Paginator.class.php"; ?>

<h1>MovieDB All Actors</h1>

<?php if ($actors->num_rows > 0) : ?>
    <ul class="list-group">
        <?php while($actor = $actors->fetch_assoc()) : ?>
            

        <li class="list-group-item">
            <?php include CURR_VIEW_PATH . DS . "actors" . DS . "show.php"; ?>
        </li>
        <?php endwhile ?>
    </ul>
<?php else: ?>
    <p>0 results</p>
<?php endif ?>
<?php /*
        echo "<ul class='list-group'>";
        while($actor = $actors->fetch_assoc()) {
            echo "<li class='list-group-item'></li>";
            //echo "<li class='list-group-item' >";
            //include CURR_VIEW_PATH . DS . "actors" . DS . "show.php";
            //echo "</li>";
        }
        echo "</ul>";
        
    } else {
        echo "<p>0 results</p>";
    }
    */
?>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>