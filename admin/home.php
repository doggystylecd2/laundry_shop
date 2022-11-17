<div class="page-wrapper" >
     
    <!-- SIDE BAR MOBILE AND DESKTOP -->
    <?php include('./admin/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
   <div class="page-container2" style="background-image: url('images/icon/background.jpg');height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
        <!-- HEADER DESKTOP-->
            <?php include('./pages/header_account.php') ?>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                            <?php 
                                                $total_courier = $db->select("select count(user_id) as total from users where user_type = 3");
                                                echo $total_courier[0]["total"];
                                            ?></h2>
                                            <span>tatal courier</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c2">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <h2><?php 
                                                $total_users = $db->select("select count(user_id) as total from users where user_type = 2");
                                                echo $total_users[0]["total"];
                                            ?></h2>
                                            <span>total users</span>
                                        </div>
                                    </div>
                                    <div class="overview-chart">
                                        <canvas id="widgetChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
             
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Courier Approval</h3>
                                <!-- <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="table_list">
                                        <thead>
                                            <tr>
                                                <!-- <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th> -->
                                                <!-- <th>date</th> -->
                                                <th>email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $user_to_verify = $db->select("SELECT * FROM users 
                                                INNER JOIN personal_info using(user_id)
                                                INNER JOIN courier_details using(p_info_id)
                                                where status = 0 and user_type = 3");
                                                if(count($user_to_verify) > 0){
                                                    foreach ($user_to_verify as $key => $value) {
                                                        ?>
                                                        <tr class="tr-shadow">
                                                            
                                                            <td>
                                                                <span class="block-email"><?php echo $value["email"]; ?></span>
                                                            </td>
                                                            <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View" type="button"  id="<?php echo $value["user_id"]; ?>" onclick="showModal(this.id)">
                                                                    <i class="zmdi zmdi-eye" style="color:green"></i>
                                                                </button>
                                                            </div>
                                                            </td>
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
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- modal scroll -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel" >
                    <div id="pacel_no">
                         <span id="parcel_no_value"></span>
                    </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="parcel_modal_body">
                <div id="parcel_details"></div>
            </div>
            
        </div>
    </div>
</div>

<script>
 function updateStatus(user_id, name) 
  {

    $.post("api/routes.php",{user_id: user_id, name: name,action:"courier_approval"}, function(data) 
    { 
        location.reload(true); 
    }
    );
  }

    function showModal(user_id){
    //    $('#scrollmodal').toggle();
    //    alert('dafdaf');
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Courier Details</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/routes.php",
            {user_id: user_id,action:"getDetailsCourier"},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append(data);
            }
        );
    }

</script>