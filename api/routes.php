<?php
// echo "<pre>";
//     var_dump($_POST);
// echo "</pre>";
include('controller/ActionAdminClass.php');
$crud = new ActionAdminClass();
if(isset($_GET["action"]) ){
    $action = $_GET['action'];
} elseif (isset($_POST["action"])) {
   
   $action = $_POST['action'];
    if($action == "courier_approval"){
        $approvalRegister = $crud->ApprovalCourierRegister();
        if($approvalRegister)
            echo $approvalRegister;
    }

}
?>