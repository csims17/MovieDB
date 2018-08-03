<?php

// application/models/UserModel.class.php

class ActorModel extends Model {

    public function getActors() {
        $sql = "select * from actors limit 50";
        $result = $this->query($sql);
        return $result;
    }

    public function getActor($id) {
    	$sql = "select * from actors where id =" . $id;
    	$result = $this->query($sql);
    	return $result;
    }


}