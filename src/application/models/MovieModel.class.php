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

    public function editMovie($id, $changes) {
        echo "<p>statement 1</p>";
        $sql =  "UPDATE movies SET";
        
        if (isset( $changes['title'])) {
            $sql .= " title = '" . $changes['title'] . "',";
        }
        if (isset( $changes['description'])) {
            $sql .= " description = '" . $changes['description'] . "',";
        }
        if (isset( $changes['releaseDate'])) {
            $sql .= " releaseDate = '" . $changes['releaseDate'] . "',";
        }
        if (isset( $changes['minutes'])) {
            $sql .= " minutes = " . $changes['minutes'] . ",";
        }
        if (isset( $changes['link'])) {
            $sql .= " link = '" . $changes['link'] . "',";
        }

        $sql = substr($sql, 0, -1). " ";

        $sql .= " WHERE id= ". $id . ";";
        echo $sql."<br>"; 
        $this->query($sql);
    }

}