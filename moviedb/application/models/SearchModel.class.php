<?php

// application/models/UserModel.class.php

class SearchModel extends Model { 


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

	public function getTitle($_GET["title"]) {
    	$sql = "select * from movies where title =" . $_GET["title"];
        //echo $sql;
    	$result = $this->query($sql);
    	return $result;
    }

	public function getRD($_GET["releaseDate"]) {
    	$sql = "select * from movies where releaseDate =" . $_GET["releaseDate"];
        //echo $sql;
    	$result = $this->query($sql);
    	return $result;
    }

	public function getGenres($_GET["genre"]) {
    	$sql = "select * from movies_genres where genre =" . $_GET["genre"];
        //echo $sql;
    	$result = $this->query($sql);
    	return $result;
    }

	public function getLength($_GET["minutes"]) {
    	$sql = "select * from movies where minutes =" . $_GET["minutes"];
        //echo $sql;
    	$result = $this->query($sql);
    	return $result;
    }

    public function editMovie($id, $changes) {

        $sql =  "UPDATE movies";
        $sql .= "SET column1 = value1, column2 = value2";
        for ($i=0; $i < count($changes); $i++) { 
            # code...for each item in changes, ....
        }
        $sql .= "WHERE id= ". $id . ";";
        $this->query($sql);
    }

	public function getGenres($id){
		$sql = "select genre from movie_genre where movie_id =" . $id; 
		$result = $this->query($sql);
		return $result; 
	}

}