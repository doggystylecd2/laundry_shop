<?php 

function registerParcel($db, $data){
    $getID = $db->Insert("INSERT INTO users (username,email,`password`,`status`,user_type) VALUES (?,?,?,?,?)", array($data["username"],$data["email"],$data["password"], 1,2) );
    if($getID){
        $_SESSION['user_id'] = $getID;
        $_SESSION["user_type"] =  2;
        $get_p_info_id = $db->Insert("INSERT INTO personal_info (`user_id`,`image`) VALUES (?,'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg')", [$getID]);
        if($get_p_info_id){
            // if($db->Insert("INSERT INTO address_info (`p_info_id`) VALUES (?)", [$get_p_info_id])){
            //     return true;
            // }
            return true;
        }
    }
    return false;
}

function registerCourier($db, $data){
    $getID = $db->Insert("INSERT INTO users (username,email,`password`,`status`,user_type) VALUES (?,?,?,?,?)", array($data["username"],$data["email"],$data["password"], 0,3) );
    if($getID){
        $_SESSION['user_id'] = $getID;
        $_SESSION["user_type"] = 3;
        $get_p_info_id = $db->Insert("INSERT INTO personal_info (`user_id`,`image`) VALUES (?,'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg')", [$getID]);
        if($get_p_info_id){
            if($db->Insert("INSERT INTO courier_details (`p_info_id`,`resume`,`description`) VALUES (?,?,?)", [$get_p_info_id,$data["resume"],$data["textarea-input"]])){
                return true;
            }
        }
    }
    return false;
}


function getMyUrl()
{
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
  return $protocol.$server.$port;
}

function insertToken($db){
    $token = bin2hex(random_bytes(16));
    $db->Insert("INSERT INTO access_token (access_token,`user_id`) VALUES (?,?)", array($token, $_SESSION["user_id"]) );
    $_SESSION['access_token'] = $token;
}

function getDetailsUsers($db){
    $data = $db->Select("SELECT * FROM access_token
    inner join users using(user_id)
     where access_token = ?  order by token_id desc limit 1", array($_SESSION["access_token"]));
    return $data[0];
}


function getDetailsUsersInformation($db){
    $data = $db->Select("SELECT * FROM users inner join personal_info using(user_id) where user_id = ? limit 1",array($_SESSION["user_id"]) );
    return $data[0];
}

function updateUSerProfile($db){
    extract($_POST);
    try {
        $folder = "images/profile";
        $temp = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)).'.'. end($temp);
        $db_path ="$folder".$newfilename ;
        // //remove the .
        // $listtype = array(
        // '.jpg'=>'application/jpeg',
        // '.png'=>'application/png'
        // ); 
        if ( is_uploaded_file( $_FILES['image']['tmp_name'] ) )
        {
            // if($key = array_search($_FILES['image']['type'],$listtype))
            // {
                if (move_uploaded_file($_FILES['image']  ['tmp_name'],"$folder".$newfilename))
                {
                    // $path =  $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/'.$db_path;
                    $link = getMyUrl().'/'.$db_path;
                    // $image = "https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg";
                    $data = $db->Update("update personal_info SET first_name = ?, last_name = ? , middle_name = ?, street = ?, city = ?, province = ?, zip_code = ?, barangay = ?, house_no = ?, discrict_code = ? , birthdate = ?, gender = ?, contact_no = ?, image = ?  WHERE user_id = ? ", array(
                        $first_name,
                        $last_name,
                        $middle_name,
                        $street,
                        $city,
                        $province,
                        $zip_code,
                        $barangay,
                        $house_no,
                        $discrict_code,
                        $birthdate,
                        $gender,
                        $contact_no,
                        $link,
                        $_SESSION["user_id"]));

                   
                    return true;

                    
                }
                return false;
            // }
            // else    
            // {
            //     // echo "File Type Should Be .Docx or .Pdf or .Rtf Or .Doc";
            //     return "1";
            // }
        } else {
            $data = $db->Update("update personal_info SET first_name = ?, last_name = ? , middle_name = ?, street = ?, city = ?, province = ?, zip_code = ?, barangay = ?, house_no = ?, discrict_code = ? , birthdate = ?, gender = ?, contact_no = ?  WHERE user_id = ? ", array(
                $first_name,
                $last_name,
                $middle_name,
                $street,
                $city,
                $province,
                $zip_code,
                $barangay,
                $house_no,
                $discrict_code,
                $birthdate,
                $gender,
                $contact_no,
                $_SESSION["user_id"]));
        }
        return false;
    } catch(\Exception $e) {
        // return $e->getMessage();
        return false;
    }
    
}

function getCourierDetails($db){
    $data = $db->Select("SELECT * FROM users 
    inner join personal_info using(user_id) 
    where status = 1 and user_type = 3  ");
    return $data;
    // return $data[0];
}

function getWeightAmount($db){
    $data = $db->Select("SELECT * FROM set_weight ");
    return $data;
}

function getaddressOptional($db){
    $data = $db->Select("select * from address_info where user_id = ? ", array($_SESSION["user_id"]));
    return $data;
}

function addParcelUsers($db){
    extract($_POST);
    try {

        $amount = 50;
        
        if(isset($selected_address) && $selected_address == "new"){
            $address_sender = $address_sender;
            $db->Insert("INSERT INTO address_info (`user_id`,`address`) VALUES (?,?)", [
                $_SESSION["user_id"],
                $address_sender
            ]);
        } else {
            $address_sender  = $selected_address;
        }


        $get_p_info_id = $db->Insert("INSERT INTO parcel_details (`user_id`,`idcourier_details`,`recepient_name`,`recepient_address`,`recepient_contact_no`,`parcel_number`,`type_delivery`,`weight_id`,`amount`,`address_sender`,`parcel_description`) VALUES (?,?,?,?,?,?,?,?,?,?,?)", [
            $_SESSION["user_id"],
            $idcourier_details,
            $recepient_name,
            $recepient_address,
            $recepient_contact_no,
            $parcel_number,
            $type_delivery,
            $weight_id,
            $amount,
            $address_sender,
            $parcel_description
        ]);
       
    } catch(\Exception $e) {
        return $e->getMessage();
        // return false;
    }
}

?>