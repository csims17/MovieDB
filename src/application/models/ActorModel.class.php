<?php

// application/models/UserModel.class.php

class ActorModel extends Model {

    public function getActors() {
        $sql = "select * from actors limit 50";
        $result = $this->query($sql);
        return $result;
    }

    public function getPaginatedActors() {
        require_once CORE_PATH . "Paginator.class.php";
        $query      = "SELECT * from actors order by title";
     
        $paginator  = new Paginator( $this->db, $query );
        return $paginator;
        //$results    = $Paginator->getData( $page, $limit );
        //return $results;
    }

    public function getActor($id) {
    	$sql = "select * from actors where id =" . $id;
    	$result = $this->query($sql);
    	return $result;
    }

    public function editMovie($id, $changes) {

        $sql =  "UPDATE actors";
        $sql .= "SET column1 = value1, column2 = value2";
        for ($i=0; $i < count($changes); $i++) { 
            # code...for each item in changes, ....
        }
        $sql .= "WHERE id= ". $id . ";";
        $this->query($sql);
    }



}