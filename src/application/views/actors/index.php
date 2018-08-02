<?php include CURR_VIEW_PATH . 'inc' . DS . 'header.php';   ?>

<a href=></a>
<h1>MovieDB All Actors</h1>
<nav aria-label="Page navigation top">
    <?php echo $paginator->createLinks( $links); ?> 
</nav>
<?php if (count($actors) > 0) : ?>
    <ul class="list-group">
        <?php for ($i=0; $i < count($actors); $i++) : ?>
            <?php $actor = $actors[$i] ?>

            <li class="list-group-item">
                <h3>
                    <a href=<?php echo URL_ROOT . "actor/show/?id=" . $actor['id'] ?>>
                        <?php echo $actor["name"] ?>
                    </a>
                </h3>
            <?php
                //echo "<p>"  . $actor["description"] .   "</p>";
                //echo "<p>"  . "release date: " . $actor["releaseDate"] .    "</p>";
            ?>
            </li>
        <?php endfor ?>
    </ul>
    <br>
    <nav aria-label="Page navigation bottom">
        <?php echo $paginator->createLinks( $links); ?> 
    </nav>
<?php else: ?>
    <p>No actors in db</p>
<?php endif ?>

<?php include CURR_VIEW_PATH . 'inc' . DS . 'footer.php';   ?>