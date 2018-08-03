<?php
class ActorController extends Controller{
// used to display the home page 
    public function indexAction() {
        // Load View template
        $actorModel = new actorModel("actors");
        $actors = $actorModel->getActors();
        include  CURR_VIEW_PATH . "actors". DS . "index.php";
    }
    public function showAction($parameters) {
        // Load View template
        $actorModel = new actorModel("actors");
        $actor = $actorModel->getActor($_GET['id']);
        $actor = $actor->fetch_assoc();
        include  CURR_VIEW_PATH . "actors". DS  . "show.php";
        // actorDB/application/views/actors/show.php;
    }
}