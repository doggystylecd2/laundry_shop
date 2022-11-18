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
  header("location:index.php?page=home");
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
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
    
    if(isset($_POST["user_register"]) && $_POST["user_register"] == "submit") {
        

        $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '' ;
        $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '' ;
        $middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '' ;
        $contact_no = isset($_POST['contact_no']) ? $_POST['contact_no'] : '' ;
        $list_barangay = isset($_POST['list_barangay']) ? $_POST['list_barangay'] : '' ;
        $zone_number = isset($_POST['zone_number']) ? $_POST['zone_number'] : '' ;
        $email = isset($_POST['email']) ? $_POST['email'] : '' ;
        $password = isset($_POST['password']) ? $_POST['password'] : '' ;
        $username = isset($_POST['username']) ? $_POST['username'] : '' ;

        echo "<pre>";
          var_dump($_POST);
        echo "</pre>";

       if (empty($email) && empty($password)) {
            $message = "Please fill in the form!...";
        } elseif (empty($email)) {
            $message = "Email is empty";
        } elseif (empty($password)) {
            $message = "Password is empty";
        }

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
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="au theme template">
      <meta name="author" content="Hau Nguyen">
      <meta name="keywords" content="au theme template">
      <!-- Main CSS-->
      <link href="css/theme.css" rel="stylesheet" media="all">
      <!-- Title Page-->
      <title><?php echo $systemDetails["title"]; ?><</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
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
                           <button class="btn btn-primary " data-toggle="modal" data-target="#modalUser" style="margin:10px">
                             User
                           </button>
                           <button class="btn btn-primary " data-toggle="modal" data-target="#myModal" style="margin:10px">
                             Delivery Rider
                           </button>
                           <button class="btn btn-primary " data-toggle="modal" data-target="#myModal" style="margin:10px">
                             Shop
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
   <div id="modalUser" class="modal fade"  data-backdrop="static" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <div class="stepwizard" >
             <div class="stepwizard-row setup-panel">
               <div class="stepwizard-step">
                 <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                 <p>User Information</p>
               </div>
               <div class="stepwizard-step">
                 <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                 <p>Address</p>
               </div>
               <div class="stepwizard-step">
                 <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                 <p>User Account</p>
               </div>
             </div>
           </div>
         </div>
         <div class="modal-body">
           <div class="container" style="width:100%;">



             <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="userFOrm">
               <div class="row setup-content" id="step-1">
                 <div class="col-md-12 ">
                   <div class="col-md-12">
                     <h3> Step 1</h3>
                     <div class="form-group">
                       <label class="control-label">First Name</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="Enter First Name" type="text" name="first_name" value="<?php echo $first_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Last Name</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="Enter Last Name" type="text" name="last_name" value="<?php echo $last_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Middle Name</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="Enter Middle Name" type="text" name="middle_name" value="<?php echo $middle_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Contact No.</label>
                       <input maxlength="12" required="required" class="form-control" placeholder="Enter Mobile Number" type="text" name="contact_no" value="<?php echo $contact_no ?>">
                     </div>
                     
                   </div>
                   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                 </div>
               </div>

               <div class="row setup-content" id="step-2">
                 <div class="col-xs-12">
                   <div class="col-md-12">
                     <h3> Step 2</h3>
                     <div class="form-group">
                       <label class="control-label">City</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="San Fernando City" disabled >
                     </div>
                     <div class="form-group">
                       <label class="control-label">Province</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="La Union" disabled >
                     </div>
                     <div class="form-group">
                       <label class="control-label">Zip Code</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="2500" disabled >
                     </div>
                     <div class="form-group">
                        <label class="control-label">District</label>
                        <select name="list_barangay" id="list-barangay" class="form-control" required="required">
                           <?php 
                             $db = new DatabaseClass();
                             $data = $db->Select("SELECT * FROM barangay order by name asc  ");
                             $option = '';
                             if(count($data) > 0) {
                                foreach ($data as $key => $value) {
                                    if($value["barangay_id"] == $list_barangay) {
                                      $option .= "<option value='".$value["barangay_id"]."' selected>".$value["name"]."</option>";
                                    } else {
                                      $option .= "<option value='".$value["barangay_id"]."'>".$value["name"]."</option>";
                                    }
                                    
                                }
                                echo $option;
                             } else {
                                echo "<option>N/A</option>";
                             }
                            ?>
                        </select>
                    </div>
                     <div class="form-group">
                        <label class="control-label">Barangay</label>
                        <input class="form-control" type="text" name="zone_number" id="zone_number" placeholder="Barangay" required="required" name="barangay" value="<?php echo $zone_number ?>">
                    </div>
                     <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                   </div>
                 </div>
               </div>
               <div class="row setup-content" id="step-3">
                 <div class="col-xs-12">
                   <div class="col-md-12">
                     <h3> Step 3</h3>
                     <div class="form-group">
                       <label class="control-label">Username</label>
                       <input  required="required" class="form-control" placeholder="Enter Username" type="text" name="username" value="<?php echo $username ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Email</label>
                       <input  required="required" class="form-control" placeholder="Enter Email" type="text" name="email" value="<?php echo $email ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Password</label>
                       <input  required="required" class="form-control"  type="password" name="password" value="<?php echo $password ?>">
                     </div>
                     <?php echo $message; ?>
                     <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                     <input class="btn btn-primary  btn-lg pull-right" type="submit" name="user_register" value="submit" />
                   </div>
                 </div>
               </div>
             </form>

           </div>
         </div>
         <div class="modal-footer">
         </div>
       </div>
       <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
   </div>
   <!-- END OF MODAL USER -->
</body>
</html>

<script type="text/javascript">
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