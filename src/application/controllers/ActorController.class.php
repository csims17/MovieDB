<?php

class ActorController extends Controller{
// used to display the home page 

    public function oldIndexAction() {
        // Load View template
        $actorModel = new ActorModel("actors");
        $actors = $actorModel->getActors();
        include  CURR_VIEW_PATH . "actors". DS . "index.php";
        //echo "<h1>indexAction not yet implemented</h1>";

    }

    public function indexAction() {
        // Load View template
        $actorModel = new actorModel("actors");
        $paginator = $actorModel->getPaginatedActors();

        $page       = ( isset( $_GET['page']  ) )   ? $_GET['page']     : 1;
        $limit      = ( isset( $_GET['limit'] ) )   ? $_GET['limit']    : 25;
        $links      = ( isset( $_GET['links'] ) )   ? $_GET['links']    : 7;

        $result     = $paginator->getData($limit, $page);
        $actors     = $result->data;
        include  CURR_VIEW_PATH . "actors". DS . "index.php";

    public function showAction() {
        //echo "<h1>ShowAction not yet implemented</h1>";
        // Load View template
        $actorModel = new ActorModel("actors");
        $actor = $actorModel->getActor("id");
        include  CURR_VIEW_PATH . "actors". DS  . "show.php";
        // actorDB/application/views/actors/show.php;
    }

    public function editAction($parameters) {
        // if user is not logged in, load login page
        // todo

        // else load edit page
        print_r($parameters);
        $actorModel = new actorModel("actors");
        $actor = $actorModel->getActor($_GET['id']);
        $actor = $actor->fetch_assoc();

        include  CURR_VIEW_PATH . "actors". DS  . "show.php";

    }
}