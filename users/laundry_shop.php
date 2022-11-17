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
    <div class="page-container2" style="background-image: url('images/icon/background.jpg');height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
       
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
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card hover" >
                                <img class="card-img-top" src="images/icon/logo_laundryshop.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">GOWASH</h4>
                                    <p class="card-text">Address: National Highway Pagdalagan Norte Crossing Pagdalagan Norte, San Fernando La Union 
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                        <?php $data_rate = $db->Select("select * from rate_courier where courier_id = ? ", array($id_courier)) ;
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
                                            <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">OK</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">Very bad</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($id_courier)) ;
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
                                    <button  class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="submit" value="" id="1" onclick="showModal(this.id)">Book Now</button>
                                </div>
                            </div>
                        </div>
                        
                         
                         
                        <div class="col-md-4">
                            <div class="card hover" >
                                <img class="card-img-top" src="images/icon/logo_laundryshop.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">GOWASH</h4>
                                    <p class="card-text">Address: National Highway Pagdalagan Norte Crossing Pagdalagan Norte, San Fernando La Union 
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                        <?php $data_rate = $db->Select("select * from rate_courier where courier_id = ? ", array($id_courier)) ;
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
                                            <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">OK</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">Very bad</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($id_courier)) ;
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
                                    <button  class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="submit" value="" id="1" onclick="showModal(this.id)">Book Now</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card hover" >
                                <img class="card-img-top" src="images/icon/logo_laundryshop.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">GOWASH</h4>
                                    <p class="card-text">Address: National Highway Pagdalagan Norte Crossing Pagdalagan Norte, San Fernando La Union 
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                        <?php $data_rate = $db->Select("select * from rate_courier where courier_id = ? ", array($id_courier)) ;
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
                                            <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">OK</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">Very bad</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($id_courier)) ;
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
                                    <button  class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="submit" value="" id="1" onclick="showModal(this.id)">Book Now</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card hover" >
                                <img class="card-img-top" src="images/icon/logo_laundryshop.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">GOWASH</h4>
                                    <p class="card-text">Address: National Highway Pagdalagan Norte Crossing Pagdalagan Norte, San Fernando La Union 
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                        <?php $data_rate = $db->Select("select * from rate_courier where courier_id = ? ", array($id_courier)) ;
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
                                            <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">OK</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">Very bad</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($id_courier)) ;
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
                                    <button  class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="submit" value="" id="1" onclick="showModal(this.id)">Book Now</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card hover" >
                                <img class="card-img-top" src="images/icon/logo_laundryshop.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">GOWASH</h4>
                                    <p class="card-text">Address: National Highway Pagdalagan Norte Crossing Pagdalagan Norte, San Fernando La Union 
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                        <?php $data_rate = $db->Select("select * from rate_courier where courier_id = ? ", array($id_courier)) ;
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
                                            <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 5 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 4 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">OK</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 3 ", array($id_courier)) ;
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
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 2 ", array($id_courier)) ;
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
                                        <h5 class="review-stat">Very bad</h5>
                                        <div class="small-ratings">
                                        <?php $data_rate_5 = $db->Select("select * from rate_courier where courier_id = ? and rate_type = 1 ", array($id_courier)) ;
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
                                    <button  class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="submit" value="" id="1" onclick="showModal(this.id)">Book Now</button>
                                </div>
                            </div>
                        </div>
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
            <div class="modal-body" id="parcel_modal_body">
                <div id="parcel_details"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    function showModal(parcel_ID){
    //    $('#scrollmodal').toggle();
    //    alert('dafdaf');
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Parcel #: '+ parcel_ID +'</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        // $.post(
        //     "api/routes.php",
        //     {parcel_ID: parcel_ID,action:"get_details_parcel",type:"users"},
        //     function(data){ 
        //         // location.reload(true); 
        //         $('#parcel_modal_body').append(data);
        //     }
        // );
    }
</script>