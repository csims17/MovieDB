<?php

class ActorController extends Controller{
// used to display the home page 

    public function indexAction() {
        // Load View template
        $actorModel = new ActorModel("actors");
        $actors = $actorModel->getActors();
        //include  CURR_VIEW_PATH . "actors". DS . "index.php";
        echo "<h1>indexAction not yet implemented</h1>";

    }

    public function showAction() {
        echo "<h1>ShowAction not yet implemented</h1>";
        // Load View template
        //$movieModel = new ActorModel("actors");
        //$movie = $movieModel->getMovie("id");
        //include  CURR_VIEW_PATH . "movies". DS  . "show.php";
        // movieDB/application/views/movies/show.php;
    }
}