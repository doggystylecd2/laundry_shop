<?php 

require  __DIR__.'/vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
->immutable()
->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();

include('./database/connection.php');
include('./controller/Portal.php');

session_start();

if(isset($_SESSION['access_token'])) {
  header("location:index.php");
}

$db = new DatabaseClass();
$systemDetails = getSystemDetails($db);

$message = "";
$first_name = '';
$last_name = '';
$middle_name = '';
$contact_no = '';
$list_barangay = '';
$zone_number ='';
$email = '';
$password = '';
$username = '';
$shop_descriptions = '';
$shop_name = '';
$shop_owner = '';
$shop_bussiness_id ='';

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {

    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '' ;
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '' ;
    $middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '' ;
    $contact_no = isset($_POST['contact_no']) ? $_POST['contact_no'] : '' ;
    $list_barangay = isset($_POST['list_barangay']) ? $_POST['list_barangay'] : '' ;
    $zone_number = isset($_POST['zone_number']) ? $_POST['zone_number'] : '' ;
    $email = isset($_POST['email']) ? $_POST['email'] : '' ;
    $password = isset($_POST['password']) ? $_POST['password'] : '' ;
    $username = isset($_POST['username']) ? $_POST['username'] : '' ;

    if (empty($email) && empty($password)) {
        $message = "Please fill in the form!...";
    } elseif (empty($email)) {
        $message = "Email is empty";
    } elseif (empty($password)) {
        $message = "Password is empty";
    }

    if(isset($_POST["user_register"]) && $_POST["user_register"] == "submit") {

        $data = $db->Select("SELECT * FROM users where email = ?  ", [$email]);
        if(count($data) > 0) {
                $message = "Email Already Exist!..";
        }else {
            $landmark ='';
                // $register = new Portal();
            $data_post = [
                "first_name" => $first_name,
                "last_name" => $last_name,
                "middle_name" => $middle_name,
                "list_barangay" => $list_barangay,
                "zone_number" => $zone_number,
                "contact_no" => $contact_no,
                "landmark" => $landmark,
                "username" => $username,
                "email" => $email,
                "password" => $password,
                "type" => 2,
            ];
            if(registerUsers($db, $data_post)){
                // $token = bin2hex(random_bytes(16));
                // $_SESSION['access_token'] = $token;
                insertToken($db);
                header("location:index.php?page=user_home");
            } else {
                $message = "Something is wrong!...";
            }
        }    
    } elseif (isset($_POST["driver_register"]) && $_POST["driver_register"] == "submit") {
       
        $data = $db->Select("SELECT * FROM users where email = ?  ", [$email]);
        if(count($data) > 0) {
                $message = "Email Already Exist!..";
        }else {
            $landmark ='';
            // RESUME UPLOAD FILE 
            $folder = "Resume/";
            $temp = explode(".", $_FILES["file-input"]["name"]);
            $newfilename = round(microtime(true)).'.'. end($temp);
            $name = $last_name.$first_name;
            $new_str = str_replace(' ', '', $name);
            $name = strtolower($new_str);
            $resume_path ="$folder".$name.'-'.$newfilename ;
            $resume = getMyUrl().'/'.$resume_path;

            // DriverLicense UPLOAD FILE 
            $folder = "DriverLicense/";
            $temp = explode(".", $_FILES["file-driver_license"]["name"]);
            $newfilename = round(microtime(true)).'.'. end($temp);
            $name = $last_name.$first_name;
            $new_str = str_replace(' ', '', $name);
            $name = strtolower($new_str);
            $driver_license_path ="$folder".$name.'-'.$newfilename ;
            $driver_license = getMyUrl().'/'.$driver_license_path;

            $description = isset($_POST['textarea-input']) ? $_POST['textarea-input'] : '' ;

            // $register = new Portal();

            $listtype = array(
              '.doc'=>'application/msword',
              '.docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
              '.rtf'=>'application/rtf',
              '.pdf'=>'application/pdf');

            if ( is_uploaded_file( $_FILES['file-input']['tmp_name'] ) && is_uploaded_file( $_FILES['file-driver_license']['tmp_name'] ) ) {
                if ( move_uploaded_file($_FILES['file-input'] ['tmp_name'],$resume_path) && move_uploaded_file($_FILES['file-driver_license'] ['tmp_name'],$driver_license_path)) {
                    $data_post = [
                      "first_name" => $first_name,
                      "last_name" => $last_name,
                      "middle_name" => $middle_name,
                      "list_barangay" => $list_barangay,
                      "zone_number" => $zone_number,
                      "contact_no" => $contact_no,
                      "landmark" => $landmark,
                      "username" => $username,
                      "email" => $email,
                      "password" => $password,
                      "type" => 3,
                      "resume" => $resume,
                      "textarea-input" => $description,
                      "driver_license" => $driver_license
                  ];
                  if(registerCourier($db, $data_post)){
                      insertToken($db);
                      header("location:index.php?page=user_home");
                  } else {
                      $message = "Something is wrong!...";
                  }
                } else {
                  $message = "Something is wrong!...";
                }
            } else {
              $message = "Something is wrong!...";
            }
        }    
    } elseif (isset($_POST["shop_register"]) && $_POST["shop_register"] == "submit") {
       
        $data = $db->Select("SELECT * FROM users where email = ?  ", [$email]);
        if(count($data) > 0) {
                $message = "Email Already Exist!..";
        }else {
            $landmark ='';
            // RESUME UPLOAD FILE 
            $folder = "images/SHOP_LOGO/";
            $temp = explode(".", $_FILES["file-logo"]["name"]);
            $newfilename = round(microtime(true)).'.'. end($temp);
            $name = $last_name.$first_name;
            $new_str = str_replace(' ', '', $name);
            $name = strtolower($new_str);
            $logo_path ="$folder".$name.'-'.$newfilename ;
            $logo = getMyUrl().'/'.$logo_path;

            // DriverLicense UPLOAD FILE 
            $folder = "images/BUSSINESS_PERMIT/";
            $temp = explode(".", $_FILES["file-permit"]["name"]);
            $newfilename = round(microtime(true)).'.'. end($temp);
            $name = $last_name.$first_name;
            $new_str = str_replace(' ', '', $name);
            $name = strtolower($new_str);
            $business_path ="$folder".$name.'-'.$newfilename ;
            $permit = getMyUrl().'/'.$business_path;

            $shop_descriptions = isset($_POST['shop_descriptions']) ? $_POST['shop_descriptions'] : '' ;
            $shop_name = isset($_POST['shop_name']) ? $_POST['shop_name'] : '' ;
            $shop_owner = isset($_POST['shop_owner']) ? $_POST['shop_owner'] : '' ;
            $shop_bussiness_id = isset($_POST['shop_bussiness_id']) ? $_POST['shop_bussiness_id'] : '' ;

            // $register = new Portal();

            $listtype = array(
              '.doc'=>'application/msword',
              '.docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
              '.rtf'=>'application/rtf',
              '.pdf'=>'application/pdf');

            if ( is_uploaded_file( $_FILES['file-logo']['tmp_name'] ) && is_uploaded_file( $_FILES['file-permit']['tmp_name'] ) ) {
                if ( move_uploaded_file($_FILES['file-logo'] ['tmp_name'],$logo_path) && move_uploaded_file($_FILES['file-permit'] ['tmp_name'],$business_path)) {
                    $data_post = [
                      "first_name" => $first_name,
                      "last_name" => $last_name,
                      "middle_name" => $middle_name,
                      "list_barangay" => $list_barangay,
                      "zone_number" => $zone_number,
                      "contact_no" => $contact_no,
                      "landmark" => $landmark,
                      "username" => $username,
                      "email" => $email,
                      "password" => $password,
                      "type" => 4,
                      "logo" => $logo,
                      "permit" => $permit,
                      "shop_descriptions" => $shop_descriptions,
                      "shop_name" => $shop_name,
                      "shop_owner" => $shop_owner,
                      "shop_bussiness_id" => $shop_bussiness_id,
                      
                  ];
                  if(registerShop($db, $data_post)){
                      insertToken($db);
                      header("location:index.php?page=user_home");
                  } else {
                      $message = "Something is wrong!...";
                  }
                } else {
                  $message = "Something is wrong!...";
                }
            } else {
              $message = "Something is wrong!...";
            }
        }    
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Required meta tags-->
      <title><?php echo $systemDetails["title"]; ?></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="au theme template">
      <meta name="author" content="Hau Nguyen">
      <meta name="keywords" content="au theme template">
      <!-- Main CSS-->
      <link href="css/theme.css" rel="stylesheet" media="all">
      <!-- Title Page-->
      
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/6697841059.js" crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->

   <style type="text/css">
   body {
     margin-top: 40px;
     background-image: url('images/icon/background.jpg');
     height: 100%; 
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
   }
   .stepwizard-step p {
     margin-top: 10px;
   }
   .stepwizard-row {
     display: table-row;
   }
   .stepwizard {
     display: table;
     width: 100%;
     position: relative;
   }
   .stepwizard-step button[disabled] {
     opacity: 1 !important;
     filter: alpha(opacity=100) !important;
   }
   .stepwizard-row:before {
     top: 14px;
     bottom: 0;
     position: absolute;
     content: " ";
     width: 100%;
     height: 1px;
     background-color: #ccc;
     z-order: 0;
   }
   .stepwizard-step {
     display: table-cell;
     text-align: center;
     position: relative;
   }
   .btn-circle {
     width: 30px;
     height: 30px;
     text-align: center;
     padding: 6px 0;
     font-size: 12px;
     line-height: 1.428571429;
     border-radius: 15px;
   }
   .modal-body {
     max-height: calc(100vh - 210px);
     overflow-y: auto;
   }
   .modal-dialog {
     min-width: 70%;
   }
   </style>
   </head>
<body>
   <!-- REGISTER  -->
    <div class="page-wrapper"  style="background-image: url('images/icon/background.jpg');height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="page-content" style="height: 250vh;">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo_laundryshop.png" alt="pasuyo" style="height: 200px"/>
                            </a>
                        </div>
                       
                        <div class="login-form" style="text-align: center;"> 
                           <h5 style="font-size: 20px;">Register as? </h5>
                           <button class="btn" style="background-color: #ff961d;margin: 10px;" data-toggle="modal" data-target="#modalUser" >
                            <a href="register.php?page=user">
                                <i class='fas fa-users' style='font-size:24px;color:white;' data-toggle="tooltip"  title="Register as User"></i>
                            </a>
                           </button>
                           <button class="btn" style="background-color: #ff961d;margin: 10px;" data-toggle="modal" data-target="#myModal" >
                            <a href="register.php?page=driver">
                             <i class='fas fa-motorcycle' style='font-size:24px;color:white;' data-toggle="tooltip"  title="Register as Rider" ></i>
                            </a>
                           </button>
                           <button class="btn" style="background-color: #ff961d;margin: 10px;" data-toggle="modal" data-target="#myModal" >
                            <a href="register.php?page=shop">
                             <i class='fas fa-cart-plus' style='font-size:24px;color:white;' data-toggle="tooltip"  title="Register Shop"></i>
                            </a>
                           </button>

                           <div class="register-link">
                             <p>
                                 Already have account?
                                 <a href="index.php">Sign In</a>
                             </p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- END OF REGISTER  -->


   <!-- MODAL USER  -->
    <?php
      if (isset($_GET["page"])){
        if($_GET["page"] == "user") {
           require 'user_register.php';
        } elseif ($_GET["page"] == "driver"){
           require 'driver_register.php';
        } elseif ($_GET["page"] == "shop") {
          require 'shop_register.php';
        }
      }
     ?>
   <!-- END OF MODAL USER -->
</body>
</html>

<script type="text/javascript">
// $('#modalUser').show()
    $('#modalUser').modal('show');
$(document).ready(function() {

  var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn'),
    allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function(e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
      $item = $(this);

   if (!$item.hasClass('disabled')) {
      navListItems.removeClass('btn-primary').addClass('btn-default');
      $item.addClass('btn-primary');
      allWells.hide();
      $target.show();
      $target.find('input:eq(0)').focus();
    }
  });

  allPrevBtn.click(function() {
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

    prevStepWizard.trigger('click');
  });

  allNextBtn.click(function() {
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url']"),
      isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
      if (!curInputs[i].validity.valid) {
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid)
      nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>