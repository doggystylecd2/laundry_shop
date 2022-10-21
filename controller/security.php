<?php 
    session_start();
    ob_start();
    try {
        if (!isset($_SESSION["access_token"])){
            header('location:login.php');
        } 
    } catch(\Exception $e) {
        session_unset();
        session_destroy();
        session_write_close();
        setcookie(session_name(),'',0,'/');
        // session_regenerate_id(true);
        header('location:login.php');
    }
?>