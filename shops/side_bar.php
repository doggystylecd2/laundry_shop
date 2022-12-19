<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo" style="background-color: #5088ff;">
        <a href="#">
            <!-- <img src="images/icon/logo-white.png" alt="Cool Admin" /> -->
            <!-- <img src="images/icon/logo_courier.png" alt="CoolAdmin" style="height: 70px; weight: 300px;"/> -->
            <img src="images/icon/logo_laundryshop.png" alt="laundry shop" style="height: 70px; "/>
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="<?php echo $information["image"];  ?>" alt="<?php echo $users_details["username"];  ?>" />
            </div>
            <h4 class="name"><?php echo $users_details["username"];  ?></h4>
             <?php 
             if($users_details["status_user"] == 'VERIFY') {
                ?>
                 <a style="color:green;"><?php echo $users_details["status_user"];  ?></a>
                <?php
             } else {
                ?>
                <a style="color:red;"><?php echo $users_details["status_user"];  ?></a>
                <?php
             }
             ?>
            <a href="index.php?page=logout">Sign out</a>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="<?php if($_GET["page"] == 'user_home') {echo "active";}?>">
                    <a href="index.php?page=user_home">
                        <i class="fas fa-user-md"></i>My Profile
                    </a>
                </li>
                <li class="<?php if($_GET["page"] == 'shops_details') {echo "active";}?>">
                    <a href="index.php?page=shops_details">
                        <i class="fas fa-shopping-cart"></i>Shop Details
                    </a>
                </li>
                <li class="<?php if($_GET["page"] == 'new_request') {echo "active";}?>">
                    <a href="index.php?page=new_request">
                        <i class="fas fa-plus-square"></i>New Request
                    </a>
                </li>
                <li class="<?php if($_GET["page"] == 'list_nofity') {echo "active";}?>">
                    <a href="index.php?page=list_nofity">
                        <i class="fas fa-user-md"></i>Notifications
                    </a>
                </li>   
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->