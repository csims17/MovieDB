//ReviewController.php

<?php
class ReviewController extends Controller{


public function changeRating($user, $movieID, $rating){ //We need a username and movie ID to uniquely identify a review, and a rating to assign
	$testModel = new ReviewModel("reviews");
$testModel->setRating($user, $movieID, $rating);
	//echo testModel->setRating($user, $movieID, $rating); //Each review needs a rating, a username, and a movie ID

 include CURR_VIEW_PATH . "reviews" . DS . "index.php";
}	//end of changeRating

	

public function singleLookUp($user, $movieID){
$testModel = new ReviewModel("reviews");

$testModel->getSingleReview($user, $movieID);

include CURR_VIEW_PATH . "reviews" . DS . "index.php"; 
}//end of singleLookUp

public function LookUpAll($user){
$testModel = new ReviewModel("reviews");

$testModel->getReviews($user);

include CURR_VIEW_PATH . "reviews" . DS. "index.php";

}//end of LookUpAll

} //end of class


?>
