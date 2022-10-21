<?php 

function registerParcel($db, $data){
    $getID = $db->Insert("INSERT INTO users (username,email,`password`,`status`,user_type) VALUES (?,?,?,?,?)", array($data["username"],$data["email"],$data["password"], 1,2) );
    if($getID){
        $_SESSION['user_id'] = $getID;
        $_SESSION["user_type"] =  2;
        if($db->Insert("INSERT INTO personal_info (`user_id`) VALUES (?)", [$getID])){
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
        $get_p_info_id = $db->Insert("INSERT INTO personal_info (`user_id`) VALUES (?)", [$getID]);
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

?>