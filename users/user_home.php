<div class="page-wrapper">
    
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./users/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
       
        <?php include('./users/header.php');?>

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
                                        <li class="list-inline-item">My Profile</li>
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
        <?php $information = getDetailsUsersInformation($db); ?>
        <div class="col-lg-12" style="margin-top:20px;">
            <div class="card">
                <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                <span class="font-weight-bold"><?php echo $users_details["username"];  ?></span>
                                <span class="text-black-50"><?php echo $users_details["email"];  ?></span><span></span>
                            </div>
                        </div>
                        <div class="col-md-9 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Manage Profile</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4"><label class="labels">Last Name</label><input type="text" class="form-control" placeholder="last name" name="last_name" value="<?php echo $information["last_name"];  ?>"></div>
                                    <div class="col-md-4"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" name="first_name"  value="<?php echo $information["first_name"];  ?>" ></div>
                                    <div class="col-md-4"><label class="labels">Middle Name</label><input type="text" class="form-control" placeholder="middle name" name="middle_name"  value="<?php echo $information["middle_name"];  ?>"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Birhdate</label><input type="date" class="form-control" placeholder="birthdate" value="<?php echo $information["birthdate"];  ?>" name="birthdate"></div>
                                    <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="M/F" value="<?php echo $information["gender"];  ?>" name="gender"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $information["contact_no"];  ?>" name="contact_no"></div>
                                    <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $information["email"];  ?>" name="email"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4"><label class="labels">Street</label><input type="text" class="form-control" placeholder="Street Address" value="<?php echo $information["street"];  ?>" name="street"></div>
                                    <div class="col-md-4"><label class="labels">Barangay</label><input type="text" class="form-control" placeholder="Barangay" value="<?php echo $information["barangay"];  ?>" name="barangay"></div>
                                    <div class="col-md-4"><label class="labels">City</label><input type="text" class="form-control" placeholder="City" value="<?php echo $information["city"];  ?>" name="city"></div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4"><label class="labels">Province</label><input type="text" class="form-control" placeholder="Province" value="<?php echo $information["province"];  ?>" name="province"></div>
                                    <div class="col-md-4"><label class="labels">Zip Code</label><input type="text" class="form-control" placeholder="Zip Code" value="<?php echo $information["zip_code"];  ?>" name="zip_code"></div>
                                    <div class="col-md-2"><label class="labels">House #</label><input type="text" class="form-control" placeholder="House #" value="<?php echo $information["house_no"];  ?>" name="house_no"></div>
                                    <div class="col-md-2"><label class="labels">District Code</label><input type="text" class="form-control" placeholder="District Code" value="<?php echo $information["discrict_code"];  ?>" name="discrict_code"></div>
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

