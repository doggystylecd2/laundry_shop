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

// header("Content-Type: application/json");


// SESSION PARAM
// [booking_id] => 69
// [user_id] => 2 COUERIR ID
// [access_token] => 65f3042f0b3553b579a0776ae9797681


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);

    if(isset($id)  )      {

        $getDataUser = getDetailsUsersInformation($db);

        $db->Update("update notity_system set `status` = 1  WHERE `notify_id` = ? ", array($id)  );
       

        // message(true,'Your Booked ID Successfully Added. Please wait for the Confirmation!. Thank you');
       echo "http://localhost:7070/index.php?page=all_status";
    } else {
        // message(false,'Missing input!..');
    }
}


?>