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


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);

	if(isset($booking_id) && isset($user_id) )	    {

		$getDataUser = getDetailsUsersInformation($db);

		$db->Update("update form_booking_user set `user_id` = ? ,`status_booking` =  ? WHERE `booking_id` = ? ", array($user_id, 1, $booking_id)  );
       

        
        // notify courier
        $description = "You got New Order # ".$booking_id." ".date('y-m-d h:m:s');
        $db->Insert("INSERT INTO notity_system (`user_id`,`description`) VALUES (?,?)", [
            $user_id,
            $description
        ]);

        // notify courier
        $description = "Your Order # ".$booking_id.", Has been approved. We'll let you know once it done. Thank you!. ".date('y-m-d h:m:s');
        $db->Insert("INSERT INTO notity_system (`user_id`,`description`) VALUES (?,?)", [
            $_SESSION['user_id'],
            $description
        ]);

        message(true,'Your Booked ID Successfully Added. Please wait for the Confirmation!. Thank you');
	} else {
		message(false,'Missing input!..');
	}
}


?>