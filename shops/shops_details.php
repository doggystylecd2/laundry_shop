<?php 

$shops_details = getShopsDetails($db); // check user

$message = "";
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
//    updateUSerProfile($db);
   if(updateUSerProfile($db)){
        $message = "Successfuly Update";
        header('location:index.php?page=user_home');
   }
}
?>
<div class="page-wrapper" >
    
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./shops/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2" >
       
        <?php include('./shops/header.php');?>

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">My Shop Details</li>
                                    </ul>
                                </div>
                                <!-- <button class="au-btn au-btn-icon au-btn--green">
                                    <i class="zmdi zmdi-plus"></i>add item</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->
        
        <form  action="<?php echo $_SERVER['PHP_SELF'];?>?page=user_home" id="manage_user"  method="post" enctype="multipart/form-data">
            <div class="section__content section__content--p10 mt-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Shop </strong>
                                    <small> Details</small>
                                </div>
                                <div class="card-body card-block">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img  width="200px" src="<?php echo $shops_details["logo"];  ?>">
                                    <span class="text-black-50">
                                    <label class="btn btn-default btn-sm center-block btn-file">
                                            <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                                            <input type="file" name="image" style="display: NONE;">
                                        </label>
                                    </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="company" class=" form-control-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option value="0">Active</option>
                                            <option value="1">Closed</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="company" class=" form-control-label">Shop Name</label>
                                        <input type="text" id="shop_name" name="shop_name" placeholder="Enter your company name" class="form-control" value="<?php echo $shops_details["name"];  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="company" class=" form-control-label">Descriptions</label>
                                        <input type="text" id="descriptions" name="descriptions" placeholder="Enter your company name" class="form-control" value="<?php echo $shops_details["descriptions"];  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="company" class=" form-control-label">Services</label>
                                        <input type="text" id="descriptions" name="descriptions" placeholder="Enter your company name" class="form-control" value="<?php echo $shops_details["descriptions"];  ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

        </form>


        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <!-- <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PAGE CONTAINER-->
    </div>

</div>
