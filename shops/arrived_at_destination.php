<style type="text/css">
    .embed-container {
    /*   height: 0;*/
       width: 100%;
       overflow: hidden;
       position: relative;
    }

    .embed-container iframe {
       width: 100%;

    }
</style>
<div class="page-wrapper">

     <!-- SIDE BAR MOBILE AND DESKTOP -->
     <?php include('./shops/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
            <?php include('./shops/header.php') ?>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5">Arrived at Destination - (Laundry Shops)</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="table_list">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Name:</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                $user_to_verify = $db->select("SELECT *, CONCAT(last_name, ', ', first_name ) fullname FROM form_booking_user 
                                                    inner join personal_info USING (p_info_id)
                                                    where status_booking = 6 and shop_id in (select shop_id from shops where p_info_id = (select p_info_id from personal_info where user_id = ?) ) " , array($_SESSION["user_id"]) );
                                                if(count($user_to_verify) > 0){
                                                    foreach ($user_to_verify as $key => $value) {
                                                        ?>
                                                        <tr class="tr-shadow">
                                                            <td>
                                                                <?php echo $value["booking_id"]; ?>
                                                            </td>
                                                            <td><?php echo ucwords($value["fullname"]); ?></td>
                                                            <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View Details" type="button"  id="<?php echo $value["booking_id"]; ?>" name="view_details" name="view" onclick="showModal(this.id,this.name)">
                                                                    <i class="zmdi zmdi-eye" style="color:#298afe;"></i> 
                                                                    
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <!-- <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
                            </div>
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
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal add_booking">
                <div class="modal-body" id="parcel_modal_body">
                    <div id="parcel_details">
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="In proccess" />
                </div>
            </form>

        </div>
    </div>
</div>

<script>

    function showModal(booking_id,name){
    //    $('#scrollmodal').toggle();
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();
        $('#pacel_no').append('<span id="parcel_no_value">Details</span>');
          $.post(
            "api/view/driver/in_transit.php",
            {booking_id: booking_id},
            function(data){ 
                $('#parcel_details').remove();
                $('#parcel_modal_body').append(data);
            }
        );
      
    }

    $(document).ready(() => {
     
        $(".add_booking").on("submit",(e) => {
            e.preventDefault();
            var data = $('.add_booking').serializeArray();
            //  Swal.fire(
            //     'Success',
            //     'Your Booked ID Successfully Added. Please wait for the Confirmation!. Thank you',
            //     'success'
            // ).then((result) => {
            //   location.reload();
            // });

            $.ajax({
                url : "api/controller/shops/in_process.php",
                method: "post",
                data : data,
                success: (res) => {
                    console.log(res)
                    if(res.success){
                         Swal.fire(
                            'Success',
                            `${res.message}`,
                            'success'
                        ).then((result) => {
                          location.reload();
                        });
                    }else{
                        Swal.fire(
                            'Failed',
                            `${res.message}`,
                            'error'
                        )
                    }
                }
            });
            
        });
    });

</script>