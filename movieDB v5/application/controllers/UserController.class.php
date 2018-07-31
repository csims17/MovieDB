<?php

class UserController extends Controller{
// used to display the home page 

    public function indexAction() {
    	//echo "index action called in user controller";
        // Load View template
        //$movieModel = new MovieModel("movies");
        //$movies = $movieModel->getMovies();
        include  CURR_VIEW_PATH . "users". DS . "index.php";
    }
    public function loginAction() {
    	//echo "index action called in user controller";
        // Load View template
        //$movieModel = new MovieModel("movies");
        //$movies = $movieModel->getMovies();
        include  CURR_VIEW_PATH . "users". DS . "login.php";
    }
}