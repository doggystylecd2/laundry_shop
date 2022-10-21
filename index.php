
<?php include('./database/connection.php') ?>
<?php include('./controller/security.php') ?>
<?php include('./controller/Portal.php') ?>
<?php include('./pages/header.php') ?>
<?php $db = new DatabaseClass(); // initialize db?>
<?php $users_details = getDetailsUsers($db); ?>
    <?php 
        $level = [
            "admin" => [
                "home",
                "list_courier",
                "tracking_parcel",
                "report",
                "set_weight",
                "disapproved_courier",
                "users",
            ],
            "users" =>[
                "user_home",
                "parcel",
            ]
        ];
        $accessable = ["logout"];
        $home_page = $_SESSION["user_type"] == 1 ? 'home' : 'user_home';
        $page = isset($_GET['page']) ? $_GET['page'] : $home_page;
        if(!isset($_GET["page"])) {
            header('Location: index.php?page='.$page);//go home
        }
        $folder_type = $_SESSION["user_type"] == 1 ? 'admin/' : 'users/';
        if(!file_exists($folder_type.$page.".php")){
            if(in_array($page, $accessable)){
                include $page.'.php';
            } else {
                include '404.html';
            }
        } else {
            if($_SESSION["user_type"] == 1){
                if(in_array($page, $accessable)){
                    include $page.'.php';
                } elseif (in_array($page, $level["admin"])) {
                    include('./admin/'.$page.'.php');
                } else {
                    include '404.html';
                }
                
            } else {
    
                if(in_array($page, $accessable)){
                    include $page.'.php';
                } elseif (in_array($page, $level["users"])) {
                    // include $page.'.php';
                    include('./users/'.$page.'.php');
                } else {
                    include '404.html';
                }
            }
        }
       
    ?>

    
<?php include('./pages/footer.php') ?>