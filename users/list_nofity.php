
<div class="page-wrapper" >
    
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./users/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2" style="height:150vh">
       
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
                                        <li class="list-inline-item">Notications</li>
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
        
     
        <div class="section__content section__content--p30 mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Descriptions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $parcel = $db->select("SELECT * FROM notity_system where user_id = ? order by created_at desc ", array($_SESSION["user_id"]));
                                    if(count($parcel) > 0){
                                        foreach ($parcel as $key => $value) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $value["created_at"]; ?></td>
                                                <td><?php echo ucfirst($value["description"]); ?></td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php
                                        }
                                        
                                    } else {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td colspan="7">
                                                No data found!
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
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
