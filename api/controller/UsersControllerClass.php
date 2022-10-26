<?php 
   
class UsersControllerClass {
    private $db;
    public function __construct() {
		ob_start();
        include("./../database/connection.php");
		
        $this->db = new DatabaseClass();
	}


	public function getDetailsParcel(){
		try {
			extract($_POST);
			// $status = $name == "reject" ? 3 : 1;
			$data = $this->db->select("select recepient_name,recepient_address,recepient_contact_no,parcel_description,type_delivery, pd.created_at,pd.status, pd.amount, sw.description, ps.description as status_parcel from parcel_details pd
            inner join users using (user_id)
            inner join set_weight sw using(weight_id) 
            inner join parcel_status ps ON pd.status = ps.id_status 
            WHERE parcel_number = ?  limit 1", array($parcel_ID));
            // $json_encode = json_encode($data[0]);
            $div = '<div id="parcel_details">Recipient Name: '.$data[0]["recepient_name"].'<br><hr>
            Recipient Address: '.$data[0]["recepient_address"].'<br><hr>
            Recipient Contact No: '.$data[0]["recepient_contact_no"].'<br><hr>
            Description: '.$data[0]["parcel_description"].'<br><hr>
            Delivery Type: '.$data[0]["type_delivery"].'<br><hr>
            Weight: '.$data[0]["description"].'<br><hr>
            Created at: '.$data[0]["created_at"].'<br><hr>
            Status: '.$data[0]["status_parcel"].'<br><hr>
            Amount: '.$data[0]["amount"].'<br><hr>
            </div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}
}


?>