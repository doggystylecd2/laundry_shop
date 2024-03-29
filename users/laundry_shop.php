<?php 
$id_courier = 1;
?>
<style>

.height-100{
}

.ratings{
    /* margin-right:10px; */
}

.ratings i{
    
    color:#cecece;
    font-size:16px;
}

.rating-color{
    color:green !important;
}

.review-count{
    font-weight:400;
    margin-bottom:2px;
    font-size:16px !important;
}

.small-ratings i{
  color:#cecece;   
}

.review-stat{
    font-weight:300;
    font-size:12px;
    margin-bottom:2px;
}
</style>
<div class="page-wrapper" >
    
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
                                            <a href="#">Available Shops</a>
                                        </li>
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
        
        <div style="margin-top:30px;"   >
            <div class="section__content section__content--p10">
                <div class="container-fluid">
                    <div class="row">
                        <?php 
                        $shops_details = $db->Select("select * from shops where status = 0") ;
                        if(count($shops_details)>0){
                            foreach ($shops_details as $key => $value) {
                                ?>
                                <div class="col-md-3">
                                    <div class="card hover" >
                                        <img class="card-img-top" src="<?php echo $value["logo"] ?>" alt="Card image cap" >
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><?php echo $value["name"] ?></h4>
                                            <p class="card-text" style="font-size:10px;"><?php echo $value["descriptions"] ?>
                                            </p>
                                            <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="ratings">
                                                <?php $data_rate = $db->Select("select * from rate_shops where shop_id = ? ", array($value["shop_id"])) ;
                                                    if(count($data_rate)>0){
                                                    $stars = round(count($data_rate) / 5);
                                                    $stars = $stars == 0 ? $stars + 1 : $stars;
                                                    for ($i=0; $i < 5; $i++) { 
                                                        if($i < $stars){
                                                            echo '<i class="fa fa-star rating-color"></i>&nbsp;';
                                                        } else {
                                                            echo '<i class="fa fa-star"></i>';
                                                        }
                                                        
                                                    }
                                                    ?>
                                                </div>
                                                <h5 class="review-count"><?php echo count($data_rate);?> Reviews</h5>
                                                <?php
                                                    } else {
                                                    ?>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h5 class="review-count">0 Reviews</h5>
                                                    <?php
                                                    }       
                                                ?>
                                            </div>
                                            <div class="mt-1 d-flex justify-content-between align-items-center">
                                                <h5 class="review-stat">Excellent</h5>
                                                <div class="small-ratings">
                                                    <?php $data_rate_5 = $db->Select("select * from rate_shops where shop_id = ? and rate_type = 5 ", array($value["shop_id"])) ;
                                                    if(count($data_rate_5)>0){
                                                        
                                                        $stars = round(count($data_rate_5) / 5);
                                                        $stars = $stars == 0 ? $stars + 1 : $stars;
                                                        for ($i=0; $i < 5; $i++) { 
                                                            if($i < $stars){
                                                                echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                                            } else {
                                                                echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                            }
                                                        
                                                        }
                                                        ?>
                                                    <?php
                                                    } else {
                                                        for ($i=0; $i < 5; $i++) { 
                                                            echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                        }
                                                    }       
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="mt-1 d-flex justify-content-between align-items-center">
                                                <h5 class="review-stat">Very Good</h5>
                                                <div class="small-ratings">
                                                <?php $data_rate_5 = $db->Select("select * from rate_shops where shop_id = ? and rate_type = 4 ", array($value["shop_id"])) ;
                                                    if(count($data_rate_5)>0){
                                                        
                                                        $stars = round(count($data_rate_5) / 5);
                                                        $stars = $stars == 0 ? $stars + 1 : $stars;
                                                        for ($i=0; $i < 5; $i++) { 
                                                            if($i < $stars){
                                                                echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                                            } else {
                                                                echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                            }
                                                        
                                                        }
                                                        ?>
                                                    <?php
                                                    } else {
                                                        for ($i=0; $i < 5; $i++) { 
                                                            echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                        }
                                                    }       
                                                ?>
                                                </div>
                                            </div>
                                            <div class="mt-1 d-flex justify-content-between align-items-center">
                                                <h5 class="review-stat">Good</h5>
                                                <div class="small-ratings">
                                                <?php $data_rate_5 = $db->Select("select * from rate_shops where shop_id = ? and rate_type = 3 ", array($value["shop_id"])) ;
                                                    if(count($data_rate_5)>0){
                                                        
                                                        $stars = round(count($data_rate_5) / 5);
                                                        $stars = $stars == 0 ? $stars + 1 : $stars;
                                                        for ($i=0; $i < 5; $i++) { 
                                                            if($i < $stars){
                                                                echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                                            } else {
                                                                echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                            }
                                                        
                                                        }
                                                        ?>
                                                    <?php
                                                    } else {
                                                        for ($i=0; $i < 5; $i++) { 
                                                            echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                        }
                                                    }       
                                                ?>
                                                </div>
                                            </div>
                                            <div class="mt-1 d-flex justify-content-between align-items-center">
                                                <h5 class="review-stat">Poor</h5>
                                                <div class="small-ratings">
                                                <?php $data_rate_5 = $db->Select("select * from rate_shops where shop_id = ? and rate_type = 2 ", array($value["shop_id"])) ;
                                                    if(count($data_rate_5)>0){
                                                        
                                                        $stars = round(count($data_rate_5) / 5);
                                                        $stars = $stars == 0 ? $stars + 1 : $stars;
                                                        for ($i=0; $i < 5; $i++) { 
                                                            if($i < $stars){
                                                                echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                                            } else {
                                                                echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                            }
                                                        
                                                        }
                                                        ?>
                                                    <?php
                                                    } else {
                                                        for ($i=0; $i < 5; $i++) { 
                                                            echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                        }
                                                    }       
                                                ?>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="mt-1 d-flex justify-content-between align-items-center">
                                                <h5 class="review-stat">Very Poor</h5>
                                                <div class="small-ratings">
                                                <?php $data_rate_5 = $db->Select("select * from rate_shops where shop_id = ? and rate_type = 1 ", array($value["shop_id"])) ;
                                                    if(count($data_rate_5)>0){
                                                        
                                                        $stars = round(count($data_rate_5) / 5);
                                                        $stars = $stars == 0 ? $stars + 1 : $stars;
                                                        for ($i=0; $i < 5; $i++) { 
                                                            if($i < $stars){
                                                                echo '<i class="fa fa-star rating-color"></i>&nbsp;&nbsp;';
                                                            } else {
                                                                echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                            }
                                                        
                                                        }
                                                        ?>
                                                    <?php
                                                    } else {
                                                        for ($i=0; $i < 5; $i++) { 
                                                            echo '<i class="fa fa-star"></i>&nbsp;&nbsp;';
                                                        }
                                                    }       
                                                ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <button  class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="<?php echo  $value["name"]; ?>" value="" id="<?php echo $value["shop_id"] ?>" onclick="showModal(this.id,this.name)">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>


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
                    <input type="submit" class="btn btn-primary" value="Confirm" />
                </div>
            </form>

        </div>
    </div>
</div>

<script>
function showModal(shopid,name){
    $('#scrollmodal').modal('show')
    $('#parcel_no_value').remove();

    $('#pacel_no').append('<span id="parcel_no_value">'+ name +'</span>');
    $.post(
        "api/view/form_booking.php",
        {shopid: shopid},
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
            url : "api/controller/add_booking.php",
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

// function tost(){
//     const Toast = Swal.mixin({
//       toast: true,
//       position: 'top-end',
//       showConfirmButton: false,
//       timer: 2000,
//       timerProgressBar: true,
//       width: "32em",
      
//     })

//      Toast.fire({
//       icon: 'success',
//       title: 'Booked Successfully Added!. Please Wait for the Confirmation. Check your sms and eamil. Thank you'
//     })
// }
</script>