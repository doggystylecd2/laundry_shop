<?php
// echo "<pre>";
//     var_dump($_POST);
// echo "</pre>";

if(isset($_GET["action"]) ){
    $action = $_GET['action'];
} elseif (isset($_POST["action"])) {
   
    $action = $_POST['action'];
    if($action == "courier_approval"){
        include('controller/ActionAdminClass.php');
        $crud = new ActionAdminClass();
        $approvalRegister = $crud->ApprovalCourierRegister();
        if($approvalRegister)
            echo $approvalRegister;
    }

    if(isset($_POST["type"])){
        if($_POST["type"] == "users"){
            include('controller/UsersControllerClass.php');
            if($action == "get_details_parcel"){
                $crud = new UsersControllerClass();
                $details = $crud->getDetailsParcel();
                if($details)
                    echo $details;
            }
        }

        if($_POST["type"] == "courier"){
            include('controller/CourierControllerClass.php');
            if($action == "get_details_parcel"){
                $crud = new CourierControllerClass();
                $details = $crud->getDetailsParcel();
                if($details)
                    echo $details;
            }
            
            if($action == "update_parcel"){
                $crud = new CourierControllerClass();
                $details = $crud->update_parcel();
                if($details)
                    echo $details;
            }
            
        }
        
    }
  
}
?>