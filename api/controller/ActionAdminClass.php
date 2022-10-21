<?php 
   
class ActionAdminClass {
    private $db;
    public function __construct() {
		ob_start();
        include("./../database/connection.php");
		
        $this->db = new DatabaseClass();
	}


	public function ApprovalCourierRegister(){
		try {
			extract($_POST);
			$status = $name == "reject" ? 3 : 1;
			$data = $this->db->Update("update users SET status = ? WHERE user_id = ? ", array($status,$user_id));
			echo "SUCCESS";
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}
}


?>