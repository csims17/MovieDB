<?php

class MovieController extends Controller{
// used to display the home page 

    public function indexAction() {
        // Load View template
        $movieModel = new MovieModel("movies");
        $movies = $movieModel->getMovies();
        include  CURR_VIEW_PATH . "movies". DS . "index.php";
    }

    public function showAction() {
        // Load View template
        $movieModel = new MovieModel("movies");
        $movie = $movieModel->getMovie("id");
        include  CURR_VIEW_PATH . "movies". DS  . "show.php";
        // movieDB/application/views/movies/show.php;
    }
}