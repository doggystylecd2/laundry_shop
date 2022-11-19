 <!-- HEADER MOBILE--> 

<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
     <div class="logo" style="background: rgb(24,239,247);background: linear-gradient(90deg, rgba(24,239,247,1) 0%, rgba(148,255,245,1) 53%, rgba(192,251,245,1) 100%);">
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
                <li class="<?php if($_GET["page"] == 'list_courier') {echo "active";}?>" >
                    <a href="index.php?page=list_courier">
                        <i class="fas fa-tachometer-alt"></i>Active Courier</a>
                </li>
                <li class="<?php if($_GET["page"] == 'disapproved_courier') {echo "active";}?>" >
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
                </li>
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