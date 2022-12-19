<?php
session_start();
require '../../vendor/autoload.php';
$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, '../../');
$dotenv->load();
include("../../database/connection.php");
include("../../controller/Portal.php");    
$db = new DatabaseClass();

header("Content-Type: application/json");


// SESSION PARAM
// [user_id] => 69
// [user_type] => 2
// [access_token] => 65f3042f0b3553b579a0776ae9797681



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);

	if(isset($shop_id) && isset($select_services) && isset($date_time_to_pickup) && isset($address_to_picup) && isset($contact_no))	    {

		$getDataUser = getDetailsUsersInformation($db);

		$get_p_info_id = $db->Insert("INSERT INTO form_booking_user (`p_info_id`,`shop_id`,`shop_services_id`,`date_time_to_pickup`,`address`,`contact_no`) VALUES (?,?,?,?,?,?)", [
            $getDataUser["p_info_id"],
            $shop_id,
            $select_services,
            $date_time_to_pickup,
            $address_to_picup,
            $contact_no
        ]);
        $description = "You got New Order # ".$get_p_info_id." ".date('y-m-d h:m:s');

        $shop_user_id = getShopDetailsSpecific($db,$shop_id);
        $db->Insert("INSERT INTO notity_system (`user_id`,`description`) VALUES (?,?)", [
            $shop_user_id["user_id"],
            $description
        ]);

        message(true,'Your Booked ID Successfully Added. Please wait for the Confirmation!. Thank you');
	} else {
		message(false,'Missing input!..');
	}
}


?>