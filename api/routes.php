<?php
// echo "<pre>";
//     var_dump($_POST);
// echo "</pre>";

require '../vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, '../');
$dotenv->load();

if(isset($_GET["action"]) ){
    $action = $_GET['action'];
} elseif (isset($_POST["action"])) {
   
    $action = $_POST['action'];

    if(isset($_POST["type"])){

        if($_POST["type"] == "admin"){
            include('controller/ActionAdminClass.php');
            $crud = new ActionAdminClass();
            
            if($action == "getdetailsUserPending"){
                $details = $crud->get_details_users();
                if($details)
                    echo $details;
            }

            if($action == "getdetailsUserShopsPending"){
                $details = $crud->get_details_users_shops();
                if($details)
                    echo $details;
            }
            if($action == "courier_approval"){
        
                $approvalRegister = $crud->ApprovalCourierRegister();
                if($approvalRegister)
                    echo $approvalRegister;
            }

           
        }

        if($_POST["type"] == "users"){
            // include('controller/UsersControllerClass.php');
            // $crud = new UsersControllerClass();
            // if($action == "getFormBooking") {
            //     $details = $crud->view();
            //     if($details)
            //         echo $details;
            // }

           
        }

        if($_POST["type"] == "courier"){
            include('controller/CourierControllerClass.php');
            if($action == "get_details_parcel"){
                $crud = new CourierControllerClass();
                $details = $crud->getDetailsParcel();
                if($details)
                    echo $details;
            }

            if($action == "get_details_parcel_updates"){
                $crud = new CourierControllerClass();
                $details = $crud->getDetailParcelUpdates();
                if($details)
                    echo $details;
            }
            
            if($action == "update_parcel"){
                $crud = new CourierControllerClass();
                $details = $crud->update_parcel();
                if($details)
                    echo $details;
            }

            if($action == "on_going_transaction"){
                $crud = new CourierControllerClass();
                $details = $crud->on_going_transaction();
                if($details)
                    echo $details;
            }
            
            if($action == "update_notify_courier"){
                $crud = new CourierControllerClass();
                $details = $crud->update_notify_courier();
                if($details)
                    echo $details;
            }
        }

        if($_POST["type"] == "review"){
            if($action == "get_review_courier"){
                require '../database/connection.php';
                include('controller/ReviewCourier.php');
            }
        }
        
    }
  
}
?>