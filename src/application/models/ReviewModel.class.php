<?php

class ReviewModel extends Model {
  
  public function setRating($rating, $username, $movie_id) {
  $sql = "UPDATE reviews";
  $sql .= " SET rating =" . $rating;
  $sql .= " WHERE username =" . $username;
  $sql .= " AND movie_id =" . $movie_id;
  $sql .= ";";
    
    $result = $this->query($sql);
    echo $result;
    return $result;
  }
 //public function getPaginatedReviews() {}
  public function getReviews($username) {
  	$sql = "SELECT * FROM $this->table limit 50 WHERE username = " . $username;
    $result = $this->query($sql);
    return $result; 
  }
}
?>
