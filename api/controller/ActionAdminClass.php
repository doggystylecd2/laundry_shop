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
			$data = $this->db->Update("update users SET verify = ? WHERE user_id = ? ", array(1,$user_id));
			echo "SUCCESS";
			$description =  "Account Has been Verify/Confirmed by Admin";
       		$this->db->Insert("INSERT INTO notity_system (`user_id`,`description`) VALUES (?,?)", [
                $user_id,
                $description
            ]);
		} catch(\Exception $e) {
			echo "FAILED";
		}
		
	}

	public function get_details_users(){
		try {
			extract($_POST);
			// $Verify = $name == "reject" ? 3 : 1;

			$data = $this->db->select("select 
				pd.user_id,
				pd.username,
				pd.email,
				pd.`Verify`,
				`pi`.city,
				`pi`.province,
				`pi`.zip_code,
				`pi`.`zone`,
				`pi`.landmark,
				`pi`.`barangay`,
				`pd`.`user_type`,
				 pd.created_at,
				 `pi`.contact_no,
				 `pi`.image,
				 concat(pi.last_name, ', ', pi.first_name) as fullname
				from users pd
				inner join personal_info pi using (user_id)
				WHERE user_id = ? limit 1 ", array($user_id));
            
            if($name == 'view_details') {
				$Verify_description = $data[0]["Verify"] == 0 ? "Pending" : "NOT VERFIY";
				$user_type = $data[0]["user_type"] == 3 ? "Courier" : "Shop";
				// $json_encode = json_encode($data[0]);
				$div2 = 'Date Time Created: '.$data[0]["created_at"].'<br>
				Status: <span style="color: green ">'.$Verify_description.'</span><br>
				Email: '.$data[0]["email"].'<br>
				Name: '.ucwords($data[0]["fullname"]).'<br>
				Contact No: '.ucwords($data[0]["contact_no"]).'<br>
				Province: '.ucwords($data[0]["province"]).'<br>
				City: '.ucwords($data[0]["city"]).'<br>
				Barangay: '.ucwords($data[0]["barangay"]).'<br>
				Zone: '.ucwords($data[0]["zone"]).'<br>
				Landmark: '.ucwords($data[0]["landmark"]).'<br>';
				$div2 .= 'User Type: <span style="color: green ">'.$user_type.'</span><br>';
				$div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				</div></div>';
				echo $div;
           	} else {
           		if($data[0]["user_type"] == 3){
	           		$couri_details = $this->db->select("select 
					pd.user_id,
					pd.username,
					pd.email,
					pd.`Verify`,
					`pi`.city,
					`pi`.province,
					`pi`.zip_code,
					`pi`.`zone`,
					`pi`.landmark,
					`pi`.`barangay`,
					`pd`.`user_type`,
					 pd.created_at,
					 `pi`.contact_no,
					 `pi`.image,
					 concat(pi.last_name, ', ', pi.first_name) as fullname,
					 cd.driver_license,
					 cd.resume,
					 cd.description
					from users pd
					inner join personal_info pi using (user_id)
					inner join courier_details cd using(p_info_id)
					WHERE user_id = ? limit 1 ", array($user_id));
					$div2 = 'NO record Found!..';
					if(count($couri_details) > 0) {
						if($name == 'view_resume') {
		           			$div2 = "<img src='".$couri_details[0]["resume"]."' style='max-width: 100%;height: auto;text-align: center;margin:0px auto; display: flex;'/>";
		           			// $div2 = '<embed
							// 	    src="http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&navpanes=0&scrollbar=0"
							// 	    type="application/pdf"
							// 	    frameBorder="0"
							// 	    scrolling="auto"
							// 	    height="100%"
							// 	    width="100%"
							// 	></embed>';
			           	}
			            
			            if($name == 'view_driver') {
			           		$div2 = "<img src='".$couri_details[0]["driver_license"]."' width='400' height='400' style='max-width: 100%;height: auto;text-align: center;margin:0px auto; display: flex;'/><hr>";
			           		$div2 .= "Summary: ".$couri_details[0]["description"];
			           	}
			           	$div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div></div>';
						echo $div;
					} else {
						$div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						</div></div>';
						echo $div;
					}
	           		
	           	}
	           	 if($name == 'confirm') {
	           		echo "confirm";
	           	}
           	}

           	


		} catch(\Exception $e) {
			echo "FAILED".$e->getMessage();
		}
	}
}


?>