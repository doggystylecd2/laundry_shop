 <!-- HEADER MOBILE--> 

<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<?php 
 $total_users_pending = countUserPendingAdminCourier($db);
 $total_shops_pending = countUserPendingAdminShopes($db);
?>
<aside class="menu-sidebar d-none d-lg-block">
     <div class="logo"  style="background-color: #5088ff;">
        <a href="#">
            <img src="images/icon/logo_laundryshop.png" alt="laundry shop" style="height: 70px; "/>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="<?php if($_GET["page"] == 'home') {echo "active";}?>" >
                    <a href="index.php?page=home">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="<?php if($_GET["page"] == 'pending_courier') {echo "active";}?>" >
                    <a href="index.php?page=pending_courier">
                        <i class="fas fa-user"></i>New Courier <span class="badge badge-warning"><?php echo $total_users_pending["total_users"]; ?></span> </a>
                </li>
                <li class="<?php if($_GET["page"] == 'pending_shop') {echo "active";}?>" >
                    <a href="index.php?page=pending_shop">
                        <i class="fas fa-shopping-cart"></i>New Shop <span class="badge badge-warning"><?php echo $total_shops_pending["total_users"]; ?></span> </a>
                </li>
                <li class="<?php if($_GET["page"] == 'list_users') {echo "active";}?>" >
                    <a href="index.php?page=list_users">
                        <i class="fas fa-list"></i>List Users</a>
                </li>
                <li class="<?php if($_GET["page"] == 'list_shops') {echo "active";}?>" >
                    <a href="index.php?page=list_shops">
                        <i class="fas fa-shopping-cart"></i>List Shops</a>
                </li>
                <li class="<?php if($_GET["page"] == 'list_courier') {echo "active";}?>" >
                    <a href="index.php?page=list_courier">
                        <i class="fas fa-truck"></i>List Courier</a>
                </li>
               <!--  <li class="<?php if($_GET["page"] == 'disapproved_courier') {echo "active";}?>" >
                    <a href="index.php?page=disapproved_courier">
                        <i class="fas fa-tachometer-alt"></i>Disapproved Courier</a>
                </li>
                <li class="<?php if($_GET["page"] == 'users') {echo "active";}?>" >
                    <a href="index.php?page=users">
                        <i class="fas fa-tachometer-alt"></i>Users</a>
                </li>
                <li class="<?php if($_GET["page"] == 'tracking_parcel') {echo "active";}?>" >
                    <a href="index.php?page=tracking_parcel">
                        <i class="fas fa-tachometer-alt"></i>Tracking Parcel</a>
                </li> -->
               <!--  <li class="<?php if($_GET["page"] == 'report') {echo "active";}?>" >
                    <a href="index.php?page=report">
                        <i class="fas fa-tachometer-alt"></i>Report</a>
                </li> -->
                <!-- <li class="<?php if($_GET["page"] == 'set_weight') {echo "active";}?>" >
                    <a href="index.php?page=set_weight">
                        <i class="fas fa-tachometer-alt"></i>Set Weight Amount</a>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>

<!-- END MENU SIDEBAR