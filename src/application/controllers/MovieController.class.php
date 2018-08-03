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

    public function showAction($id) {
        // Load View template
        $movieModel = new MovieModel("movies");
        $movie = $movieModel->getMovie($_GET['id']);
        $movie = $movie->fetch_assoc();

        include  CURR_VIEW_PATH . "movies". DS  . "show.php";
        // movieDB/application/views/movies/show.php;
    }

    public function editAction($id) {
        /*
        $movieModel = new MovieModel("movies");
        $changes = array('key' => 3 );
        $movieModel->editMovie("333", $changes);
        */

        // if user is not logged in, load login page
        // todo

        // else load edit page
        
        //print_r($id);
        $movieModel = new MovieModel("movies");
        $movie = $movieModel->getMovie($_GET['id']);
        $movie = $movie->fetch_assoc();

        include  CURR_VIEW_PATH . "movies". DS  . "edit.php";
    }

    public function updateAction() {
        $movieModel = new MovieModel("movies");
        echo "update called";
        print_r($_POST);
        if (!isset($_POST['id'])) {
            echo "id not set";
            return 0;
        }
        $id = $_POST['id'];
        $changes = array();
        if (isset($_POST['title'])) {
            $changes['title'] = $_POST['title'];
        }
        if (isset($_POST['description'])) {
            $changes['description'] = $_POST['description'];
        }
        if (isset($_POST['releaseDate'])) {
            $changes['releaseDate'] = $_POST['releaseDate'];
        }
        if (isset($_POST['minutes'])) {
            $changes['minutes'] = $_POST['minutes'];
        }
        if (isset($_POST['link'])) {
            $changes['link'] = $_POST['link'];
        }
        $movieModel->editMovie($id, $changes);
        header("Location: " . URL_ROOT . "Movie/show/?id=" . $id);
    }
}