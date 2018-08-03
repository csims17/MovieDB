//ReviewController.php

<?php
class ReviewController extends Controller{


public function changeRating($user, $movieID, $rating){ //We need a username and movie ID to uniquely identify a review, and a rating to assign
	$testModel = new ReviewModel("reviews");

	//echo ReviewModel->setRating("7", "movieguy12", "1"); //Each review needs a rating, a username, and a movie ID

}	//end of changeRating

} //end of class


?>
