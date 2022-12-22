<?php
session_start();
require '../../../vendor/autoload.php';
$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, '../../../');
$dotenv->load();
include("../../../database/connection.php");
include("../../../controller/Portal.php");    
$db = new DatabaseClass();

header("Content-Type: application/json");


// SESSION PARAM
// [booking_id] => 69
// [user_id] => 2 COUERIR ID
// [access_token] => 65f3042f0b3553b579a0776ae9797681

    // echo print_r($_POST);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);

    if(isset($booking_id) )      {

        $getDataUser = getDetailsUsersInformation($db);

        $db->Update("update form_booking_user set `status_booking` =  ? WHERE `booking_id` = ? ", array(4, $booking_id)  );
       

        $data = $db->Select("select ( select user_id from personal_info where p_info_id = fb.p_info_id ) as clients, 
            (select user_id from personal_info where p_info_id =  ( select p_info_id from shops where shop_id = fb.shop_id ) ) as shopss from form_booking_user fb WHERE booking_id = ?  " , array($booking_id));
        // notify courier

        $description = "Order # ".$booking_id.", Has been done Reviewing by the Courier. Have a nice day!. ".date('y-m-d h:m:s');
        $db->Insert("INSERT INTO notity_system (`user_id`,`description`) VALUES (?,?)", [
            $data[0]["shopss"],
            $description
        ]);

        // notify courier
        $description = "Your Order # ".$booking_id.", Has been reviewed. Thank you!. ".date('y-m-d h:m:s');
        $db->Insert("INSERT INTO notity_system (`user_id`,`description`) VALUES (?,?)", [
            $data[0]["clients"],
            $description
        ]);

        message(true,'Your Booked ID Successfully Reviewed.');
    } else {
        message(false,'Missing input!..');
    }
}


?>