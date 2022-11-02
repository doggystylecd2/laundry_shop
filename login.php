<?php include('./pages/header.php') ?>
<?php 
session_start();

if(isset($_SESSION['access_token']))
header("location:index.php?page=home");

$message = "";
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
    // collect value of input field
    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $password = $_POST["password"];

        if (empty($email) && empty($password)) {
            $message = "Email and Password is Required";
        } elseif (empty($email)) {
            $message = "Email is empty";
        } elseif (empty($password)) {
            $message = "Password is empty";
        } else {
            include('./database/connection.php');
            include('./controller/Portal.php');
            $db = new DatabaseClass();
            $data = $db->Select("SELECT * FROM users where email = ? and password = ? ", [$email, $password]);
            if(count($data) > 0) {
                // $token = bin2hex(random_bytes(16));
                $_SESSION["user_id"] =  $data[0]["user_id"];
                $_SESSION["user_type"] =  $data[0]["user_type"];
                insertToken($db);
                if($data[0]["user_id"] != 1) {
                    header("location:index.php?page=user_home");
                } else {
                    header("location:index.php?page=home");
                }
            }else {
                $message = "Wrong credentails. Please try it again!";
            }
        }
    }
   
}
?>
    <div>
        <div class="page-content" style="background-color: #59bd60;height:130vh">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo_courier.png" alt="pasuyo" style="height: 200px"/>
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" require>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" require>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <!-- <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label> -->
                                </div>
                                <!-- <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" >sign in</button> -->
                                <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit" value="sing in">
                                <center><?php echo $message; ?></center>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="register.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('./pages/footer.php') ?>