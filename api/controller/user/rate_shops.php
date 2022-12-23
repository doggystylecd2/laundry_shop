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
// Array
// (
//     [shop_name] => Go Wash
//     [booking_id] => 9
//     [shop_id] => 5
//     [user_id] => 73
//     [comments] => 
// )

    // echo print_r($_POST);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);

    if(isset($booking_id) && isset($rate) && isset($comments) && isset($shop_id) && isset($user_id) ) { 

       $db->Insert("INSERT INTO rate_shops (`user_id`,`rate_type`, `shop_id` , `comments` , `booking_id`) VALUES (?,?,?,?,?)", [
            $user_id,
            $rate,
            $shop_id,
            $comments,
            $booking_id
        ]);
        message(true,'Your Booked ID Successfully Accepted.');
    } else {
        message(false,'Missing input!..');
    }
}


?>