<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>

<a href=></a>
<h1>MovieDB All Movies</h1>
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
<?php else: ?>
    <p>No movies in db</p>
<?php endif ?>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>