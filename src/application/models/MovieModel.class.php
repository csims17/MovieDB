<?php

// application/models/UserModel.class.php

class MovieModel extends Model { 


    public function getMovies() {
        $sql = "select * from $this->table limit 50";
        $result = $this->query($sql);
        return $result;
    }

    public function getPaginatedMovies() {
        require_once CORE_PATH . "Paginator.class.php";
        $query      = "SELECT * from movies order by title";
     
        $paginator  = new Paginator( $this->db, $query );
        return $paginator;
        //$results    = $Paginator->getData( $page, $limit );
        //return $results;


    }

    public function getMovie($id) {
    	$sql = "select * from movies where id =" . $id;
        //echo $sql;
    	$result = $this->query($sql);
    	return $result;
    }

}