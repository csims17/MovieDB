<?php

// application/controllers/admin/IndexController.class.php


class IndexController extends Controller{
// used to display the home page 

    public function indexAction() {

        //$userModel = new UserModel("user");
        //$users = $userModel->getUsers();

        // Load View template
        /*
        $movieModel = new MovieModel("movies");
        $movies = $movieModel->getMovies();
        $test = "sample output";

        include  CURR_VIEW_PATH . "movies". DS . "movieIndex.php";
        */
        // Load View template
        //$movieModel = new MovieModel("movies");
        //$movies = $movieModel->getMovies();

        include  CURR_VIEW_PATH . "home.php";

    }
    public function errorAction() {
        include CURR_VIEW_PATH . "404.php";
    }
    /*
    public function mainAction(){
        include CURR_VIEW_PATH . "main.html";

        // Load Captcha class
        $this->loader->library("Captcha");
        $captcha = new Captcha;
        $captcha->hello();
        $userModel = new UserModel("user");
        $users = $userModel->getUsers();
    }
*/

/*
    public function menuAction(){
        include CURR_VIEW_PATH . "menu.html";
    }

    public function dragAction(){
        include CURR_VIEW_PATH . "drag.html";
    }

    public function topAction(){
        include CURR_VIEW_PATH . "top.html";
    }
*/
}