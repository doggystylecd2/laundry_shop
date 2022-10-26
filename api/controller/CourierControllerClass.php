<?php 
   
class CourierControllerClass {
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
			$data = $this->db->select("select recepient_name,recepient_address,recepient_contact_no,parcel_description,type_delivery, pd.created_at,pd.status, pd.amount, sw.description, ps.description as status_parcel,
            concat(last_name,', ', first_name,' ', middle_name) full_name , pi.contact_no as sender_phone_number, address_sender,pd.idparcel_details
            from parcel_details pd
            inner join personal_info pi using (user_id)
            inner join users using (user_id)
            inner join set_weight sw using(weight_id) 
            inner join parcel_status ps ON pd.status = ps.id_status 
            WHERE parcel_number = ?  limit 1", array($parcel_ID));
            // $json_encode = json_encode($data[0]);
            $div2 = '<center>Sender Details</center>
            Name: '.ucwords($data[0]["full_name"]).'<br><hr>
            Contact #: '.$data[0]["sender_phone_number"].'<br><hr>
            Address: '.ucwords($data[0]["address_sender"]).'<br><hr>
            <center>Recipient Details</center>
            Name: '.ucwords($data[0]["recepient_name"]).'<br><hr>
            Address: '.ucwords($data[0]["recepient_address"]).'<br><hr>
            Contact No: '.$data[0]["recepient_contact_no"].'<br><hr>
            Parcel Description: '.$data[0]["parcel_description"].'<br><hr>
            Delivery Type: '.$data[0]["type_delivery"].'<br><hr>
            Weight: '.$data[0]["description"].'<br><hr>
            Created at: '.$data[0]["created_at"].'<br><hr>
            Status: <span style="color:green">'.$data[0]["status_parcel"].'</span><br><hr>
            Amount: '.$data[0]["amount"].'<br><hr>';

            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="'.$data[0]["idparcel_details"].'" name="decline" onclick="updateDetailsParcel(this.id,this.name)">Decline</button>
            <button type="button" class="btn btn-primary" id="'.$data[0]["idparcel_details"].'" name="confirm" onclick="updateDetailsParcel(this.id,this.name)">Confirm</button>
            </div></div>';
			echo $div;
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

    public function update_parcel(){
        try {
			extract($_POST);
			$data = $this->db->Update("update parcel_details SET status = ? WHERE idparcel_details = ? ", array($status,$parcel_id));
			echo "SUCCESS";
		} catch(\Exception $e) {
			echo "FAILED";
		}
    }
}


?>