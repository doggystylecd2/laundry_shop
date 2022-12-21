<?php 
 $total_new_order = countOrderCourier($db);
?>
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo"  style="background-color: #5088ff;">
        <a href="#">
            <img src="images/icon/logo_laundryshop.png" alt="laundry shop" style="height: 70px; "/>
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
                 <li class="<?php if($_GET["page"] == 'new_order') {echo "active";}?>">
                    <a href="index.php?page=new_order">
                        <i class="fas fa-truck"></i>New Order <span class="badge badge-warning"><?php echo $total_new_order["total_new_order"]; ?>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Tracking Order
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="<?php if($_GET["page"] == 'all_status') {echo "active";}?>">
                            <a href="index.php?page=all_status">All List</a>
                        </li>
                        <li class="<?php if($_GET["page"] == 'order_accepted') {echo "active";}?>">
                            <a href="index.php?page=order_accepted">Order Accepted</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Ready to Pickup</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Reviewing Items</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Items Collected</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Arrived at Destination - (Laundry Shops)</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">In-process</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Packaging</a>
                        </li>
                         <li>
                            <a href="index.php?page=order_accepted">Ready to Deliver.</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">In-Transit.</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Arrived at Destination - (Client).</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Delivered.</a>
                        </li>
                        <li>
                            <a href="index.php?page=order_accepted">Order Declined.</a>
                        </li>
                    </ul>
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