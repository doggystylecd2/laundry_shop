<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <!-- <img src="images/icon/logo-white.png" alt="Cool Admin" /> -->
            <!-- <img src="images/icon/logo_courier.png" alt="CoolAdmin" style="height: 70px; weight: 300px;"/> -->
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="<?php echo $information["image"];  ?>" alt="<?php echo $users_details["username"];  ?>" />
            </div>
            <h4 class="name"><?php echo $users_details["username"];  ?></h4>
            <a href="index.php?page=logout">Sign out</a>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="<?php if($_GET["page"] == 'user_home') {echo "active";}?>">
                    <a href="index.php?page=user_home">
                        <i class="fas fa-user-md"></i>My Profile
                    </a>
                </li>
                <li class="<?php if($_GET["page"] == 'parcel') {echo "active";}?>">
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-list"></i>Parcels
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.php?page=new_parcel">
                                <i class="fas fa-tachometer-alt"></i>New Request</a>
                        </li>
                        <li>
                            <a href="index.php?page=all_list">
                                <i class="fas fa-tachometer-alt"></i>All list</a>
                        </li>
                        <li>
                            <a href="index.php?page=parcel_status">
                                <i class="fas fa-tachometer-alt"></i>Updates</a>
                        </li>
                    </ul>
                </li>   
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->