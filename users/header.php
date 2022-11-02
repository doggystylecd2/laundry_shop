        <!-- HEADER DESKTOP-->
        <header class="header-desktop2" style="background-color: green!important;">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap2">
                        <div class="logo d-block d-lg-none">
                            <a href="#">
                                <!-- <img src="images/icon/logo_courier.png" alt="CoolAdmin" style="height: 70px; "/> -->
                            </a>
                        </div>
                        <div class="header-button2">
                            <!-- <div class="header-button-item js-item-menu">
                                <i class="zmdi zmdi-search"></i>
                                <div class="search-dropdown js-dropdown">
                                    <form action="">
                                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                        <span class="search-dropdown__icon">
                                            <i class="zmdi zmdi-search"></i>
                                        </span>
                                    </form>
                                </div>
                            </div> -->
                            <div class="header-button-item has-noti js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <?php
                                            $getTotal = $db->select("select count(*) as total from users_notify where user_id = ? and status = 0 order by created_at desc limit 5", [$_SESSION["user_id"]] );
                                            echo "<p>You have ".$getTotal[0]["total"]." Notifications</p>";
                                        ?>
                                    </div>
                                    <?php 
                                        $getNotifcation = $db->select("select * from users_notify where user_id = ? and status = 0 order by created_at desc limit 5", [$_SESSION["user_id"]] );
                                        if(count($getNotifcation)){
                                            foreach ($getNotifcation as $key => $value){
                                                ?>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p><?php echo $value["description"] ?></p>
                                                        <span class="date"><?php echo $value["created_at"] ?></span>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-button-item mr-0 js-sidebar-btn">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                            <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="index.php?page=user_home">
                                            <i class="zmdi zmdi-account"></i>My Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="index.php?page=logout">
                                            <i class="zmdi zmdi-money-box"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none" >
            <div class="logo" >
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar2">
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
                                    <a href="index.php?page=parcel">
                                        <i class="fas fa-tachometer-alt"></i>Add New</a>
                                </li>
                                <li>
                                    <a href="index.php?page=all_list">
                                        <i class="fas fa-tachometer-alt"></i>All list</a>
                                </li>
                                <li>
                                    <a href="index.php?page=pending">
                                        <i class="fas fa-tachometer-alt"></i>Waiting for Approval</a>
                                </li>
                                <li>
                                    <a href="index.php?page=on_process">
                                        <i class="fas fa-tachometer-alt"></i>On Going Transaction</a>
                                </li>
                                <li>
                                    <a href="index.php?page=denied">
                                        <i class="fas fa-tachometer-alt"></i>Denied</a>
                                </li>
                                <li>
                                    <a href="index.php?page=delivered">
                                        <i class="fas fa-tachometer-alt"></i>Delivered</a>
                                </li>
                                <li>
                                    <a href="index.php?page=unsccesfull_deliver">
                                        <i class="fas fa-tachometer-alt"></i>Unsuccessfull Delivery</a>
                                </li>
                                <li>
                                    <a href="index.php?page=rate_courier">
                                        <i class="fas fa-tachometer-alt"></i>Rate Courier</a>
                                </li>
                            </ul>
                        </li>  
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END HEADER DESKTOP-->