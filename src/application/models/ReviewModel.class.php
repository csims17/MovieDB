<?php

class ReviewModel extends Model {
  
  public function setRating($rating, $username, $movie_id) {
  $sql = "UPDATE reviews";
  $sql .= " SET rating =" . $rating;
  $sql .= " WHERE username =" . $username;
  $sql .= " AND movie_id =" . $movie_id;
    
    $result = $this->query($sql);
    return $result;
  }
 //public function getPaginatedReviews() {}
  //public function getReviews($username) {}
}
?>
