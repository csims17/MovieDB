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
        $sql =  "UPDATE movies";
        echo "<p>statement 2</p>";
        $sql .= " SET column1 = value1, column2 = value2";
         echo "<p>statement 3</p>";
       for ($i=0; $i < count($changes); $i++) { 
            # code...for each item in changes, ....;
        };
        echo "<p>statement 4</p>";
        $sql .= " WHERE id= ". $id . ";";
        $this->query($sql);
        echo "<p>statement 5</p>";
        echo $sql;
        echo "<p>statement 6</p>";
    }

}