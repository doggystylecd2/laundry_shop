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
            concat(last_name,', ', first_name,' ', middle_name) full_name , pi.contact_no as sender_phone_number, address_sender,pd.idparcel_details, ps.id_status
            from parcel_details pd
            inner join personal_info pi using (user_id)
            inner join users using (user_id)
            inner join set_weight sw using(weight_id) 
            inner join parcel_status ps ON pd.status = ps.id_status 
            WHERE parcel_number = ?  limit 1", array($parcel_ID));

            $status_color = [
                1 => 'green',
                2 => 'green',
                3 => 'yellow',
                11 => 'red',
                7 => 'green',
                12 => 'red',
            ];
            $status_color = array_key_exists($data[0]["id_status"], $status_color ) ? $status_color[$data[0]["id_status"]] : 'yellow';
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
            Status: <span style="color:'.$status_color.'">'.$data[0]["status_parcel"].'</span><br><hr>
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

            $get_details = $this->db->Select("select * from parcel_details where idparcel_details = ? limit 1", array($parcel_id));
            $status_description = $this->db->Select("select * from parcel_status where id_status = ? limit 1", array($status));
            if(count($get_details) > 0){
                $description = $get_details[0]["parcel_number"]. " Has been ".$status_description[0]["description"];
                $this->db->Insert("INSERT INTO users_notify (description,user_id,status) VALUES (?,?,0) ", array($description, $get_details[0]["user_id"] ));
                echo "SUCCESS";
            }

		} catch(\Exception $e) {
			echo "FAILED";
		}
    }

    public function getDetailParcelUpdates(){
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
            
            $status = $this->db->select("select * from parcel_status where id_status not in (1,2)");
            $option = '';
            if(count($status) > 0){
                foreach ($status as $key => $value) {
                    $option .= '<option value="'.$value['id_status'].'">'.$value["description"].'</option>';
                }
            } else {
                $option = '<option>No status</optional>';
            }


            


            // $json_encode = json_encode($data[0]);
            $div2 = '<input type="hidden" name="parcel_details_id" value="'.$data[0]["idparcel_details"].'" /><center>Sender Details</center>
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
            Update Status: <select name="status"> '.$option.' </select>
            <br><hr>
            Status: <span style="color:green">'.$data[0]["status_parcel"].'</span>
            <br><hr>
            Upload Recipient: <input type="file" name="images" value="" id="recipient-image" accept="image/*" />
            <br><hr>
            Amount: '.$data[0]["amount"].'';
            $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div></div>';
			echo $div;

		} catch(\Exception $e) {
			echo "FAILED";
		}
    }

    public function on_going_transaction(){
        // print_r($_POST);
        print_r($_FILES);
        extract($_POST);
      
        // echo $_FILES["images"];
        try {
            if($this->check_file_uploaded_name($_FILES["images"]["name"])){
                $destination_path = getcwd().DIRECTORY_SEPARATOR;
                $folder = $destination_path."/images/recipient/recipient";
                $temp = explode(".", $_FILES["images"]["name"]);
                $newfilename = round(microtime(true)).'.'. end($temp);
                $db_path = $folder.$newfilename ;
                if ( is_uploaded_file( $_FILES['images']['tmp_name'] ) )
                {
                    if (move_uploaded_file($_FILES['images']['tmp_name'],$db_path))
                    {
                        $link = $this->getMyUrl().'/api/images/recipient/recipient'.$newfilename;
                        $data = $this->db->Update("update parcel_details SET status = ?, recipient_image = ? WHERE idparcel_details = ? ", array($status,$link,$parcel_details_id));
                        
                        $get_details = $this->db->Select("select * from parcel_details where idparcel_details = ? limit 1", array($parcel_details_id));
                        $status_description = $this->db->Select("select * from parcel_status where id_status = ? limit 1", array($status));
                        if(count($get_details) > 0){
                            $description = $get_details[0]["parcel_number"]. " Has been ".$status_description[0]["description"];
                            $this->db->Insert("INSERT INTO users_notify (description,user_id,status) VALUES (?,?,0) ", array($description, $get_details[0]["user_id"] ));
                            echo "SUCCESS";
                        }
                        
                    } else {
                        echo "FALSE";
                    }
                } else {
                    echo "FALSE";
                }
            } else {
                $data = $this->db->Update("update parcel_details SET status = ? WHERE idparcel_details = ? ", array($status,$parcel_details_id));
                
                $get_details = $this->db->Select("select * from parcel_details where idparcel_details = ? limit 1", array($parcel_details_id));
                $status_description = $this->db->Select("select * from parcel_status where id_status = ? limit 1", array($status));
                if(count($get_details) > 0){
                    $description = $get_details[0]["parcel_number"]. " Has been ".$status_description[0]["description"];
                    $this->db->Insert("INSERT INTO users_notify (description,user_id,status) VALUES (?,?,0) ", array($description, $get_details[0]["user_id"] ));
                    echo "SUCCESS";
                }
                echo "SUCCESS";
            }
            
        } catch(\Exception $e) {
            echo "FALSE";
        }
    }

    private static function check_file_uploaded_name ($filename)
    {
        if($filename == '' || $filename == "" || empty($filename)){
            return false;
        }
        return true;
    }

    private static function getMyUrl()
    {
      $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
      $server = $_SERVER['SERVER_NAME'];
      $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
      return $protocol.$server.$port;
    } 

    public function update_notify_courier(){
        extract($_POST);
        $data = $this->db->Update("update courier_notify SET status = 1 WHERE id = ? ", array($id));
        echo $this->getMyUrl().'/index.php?page=new_parcel'; 
    }
}


?>