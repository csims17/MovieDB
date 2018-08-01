<?php

class MovieController extends Controller{
// used to display the home page 

    public function oldIndexAction() {
        // Load View template
        $movieModel = new MovieModel("movies");
        $movies = $movieModel->getMovies();
        include  CURR_VIEW_PATH . "movies". DS . "index.php";
    }

    public function indexAction() {
        // Load View template
        $movieModel = new MovieModel("movies");
        $paginator = $movieModel->getPaginatedMovies();

        $page       = ( isset( $_GET['page']  ) )   ? $_GET['page']     : 1;
        $limit      = ( isset( $_GET['limit'] ) )   ? $_GET['limit']    : 25;
        $links      = ( isset( $_GET['links'] ) )   ? $_GET['links']    : 7;

        $result     = $paginator->getData($limit, $page);
        $movies     = $result->data;
        include  CURR_VIEW_PATH . "movies". DS . "index.php";
    }

    public function showAction($parameters) {
        // Load View template
        $movieModel = new MovieModel("movies");
        $movie = $movieModel->getMovie($_GET['id']);
        $movie = $movie->fetch_assoc();

        include  CURR_VIEW_PATH . "movies". DS  . "show.php";
        // movieDB/application/views/movies/show.php;
    }

    public function editAction($parameters) {
        // if user is not logged in, load login page
        // todo

        // else load edit page
        print_r($parameters);
        $movieModel = new MovieModel("movies");
        $movie = $movieModel->getMovie($_GET['id']);
        $movie = $movie->fetch_assoc();

        include  CURR_VIEW_PATH . "movies". DS  . "show.php";

    }

}