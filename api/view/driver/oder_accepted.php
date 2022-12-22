<?php 
    require '../../../vendor/autoload.php';
    $repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
    ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
    ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
    ->immutable()
    ->make();

    $dotenv = Dotenv\Dotenv::create($repository, '../../../');
    $dotenv->load();
    include("../../../database/connection.php");
        
    $db = new DatabaseClass();

    extract($_POST);

    $sql = "SELECT 
            fb.booking_id,
            fb.p_info_id,
            fb.shop_id,
            fb.shop_services_id,
            fb.date_time_to_pickup,
            fb.contact_no,
            fb.address,
            fb.delivery_address,
            fb.status_booking,
            fb.user_id,
             (select name from shops where shop_id = fb.shop_id) as shop_name,
            (select description from parcel_status where id_status = fb.status_booking ) as status_name,
            (select details from parcel_status where id_status = fb.status_booking ) as status_name_details,
            (  SELECT name FROM type_of_services WHERE services_id = (SELECT services_id FROM shops_services WHERE shop_services_id = fb.shop_services_id) ) shop_services_name,
            (SELECT CONCAT(last_name, ', ', first_name ) FROM personal_info WHERE p_info_id = fb.p_info_id ) as full_name
            from form_booking_user fb
            WHERE  fb.booking_id = ? ";

    $data = $db->Select($sql, array($booking_id))[0];



?>
<div id="parcel_details">
    <div class="col-lg-12" style="font-size: 12px !important;">
            <div class="row form-group">
                <!-- <div class="col col-md-3">
                    <label for="full_name" class="form-control-label">Transaction Status:</label>
                </div> -->

                <div class="col col-md">
                    <?php 
                        $failed = array(12,13);
                        if(10 > $data["status_booking"]){ 
                             ?> 
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                <span class="badge badge-pill badge-success">In-progress</span>
                                <?php  echo $data["status_name"] ?>
                            </div>

                        <?php
                        } elseif (in_array($data["status_booking"], $failed) ) {
                        ?>
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                <span class="badge badge-pill badge-danger">FAILED</span>
                                <?php  echo $data["status_name"] ?>
                            </div>
                        <?php
                        } elseif ($data["status_booking"] == 11) {
                        ?>
                         <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                            <span class="badge badge-pill badge-primary">Success</span>
                            <?php  echo $data["status_name"] ?>
                        </div>
                        <?php
                        }

                        else {
                        ?> 
                        <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                            <span class="badge badge-pill badge-warning">CANCEL</span>
                            <?php  echo $data["status_name"] ?>
                        </div>

                        <?php
                        }

                    ?>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="shop_name" class="form-control-label">Shop Name:</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"  class="form-control-sm form-control" value="<?php echo $data["shop_name"] ?>" disabled>
                    <input type="hidden" name="shop_name" id="shop_name"  class="form-control-sm form-control" value="<?php echo $data["shop_name"] ?>" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="booking_id" class="form-control-label">Order No.</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"  class="form-control-sm form-control" value="<?php echo $data["booking_id"] ?>" disabled>
                    <input type="hidden" name="booking_id" id="booking_id"  class="form-control-sm form-control" value="<?php echo $data["booking_id"] ?>" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="full_name" class="form-control-label">Full Name.</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="full_name" id="full_name"  class="form-control-sm form-control" value="<?php echo $data["full_name"] ?>" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select_services" class="form-control-label">Type of Service</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="select_services" id="select_services"  class="form-control-sm form-control" value="<?php echo $data["shop_services_name"] ?>" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date_time_to_pickup" class="form-control-label">Date and Time to Pick-up</label>
                </div>
                <div class="col-12 col-md-9">
                   <input type="text" name="date_time_to_pickup" id="date_time_to_pickup"  class="form-control-sm form-control" value="<?php echo $data["date_time_to_pickup"] ?>" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="address_to_picup" class=" form-control-label">Pick-up Address</label>
                </div>
                <div class="col-12 col-md-9">
                   <input type="text" name="address_to_picup" id="address_to_picup"  class="form-control-sm form-control" value="<?php echo $data["address"] ?>" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="delivery_address" class=" form-control-label">Delivery Address</label>
                </div>
                <div class="col-12 col-md-9">
                   <input type="text" name="delivery_address" id="delivery_address"  class="form-control-sm form-control" value="<?php echo $data["delivery_address"] ?>" disabled>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Contact #:</label>
                </div>
                <div class="col-12 col-md-9">
                     <input type="text" name="contact_no" id="contact_no"  class="form-control-sm form-control" value="<?php echo $data["contact_no"] ?>" disabled>
                </div>
            </div>
            <hr/>
             <div class="row form-group">
                <div class="col col-md-3">
                    <label for="user_id" class="form-control-label">Available Driver</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="user_id" id="user_id" class="form-control-sm form-control" disabled>
                        <option disabled selected>-- Please select --</option>
                        <?php 
                        $list_courier = $db->Select("SELECT u.user_id, CONCAT(last_name, ', ', first_name) full_name  FROM users u inner join personal_info using(user_id) where u.user_type = 3 and u.status = 1 and u.verify  = 1");
                         $option = '';
                         if(count($list_courier) > 0) {
                            foreach ($list_courier as $key => $value) {
                                $selected = "";
                                if($data["user_id"] == $value["user_id"]){
                                    $selected = "selected";
                                }
                                ?>
                                <option value="<?php echo $value["user_id"] ?>" <?php echo $selected; ?> ><?php echo $value["full_name"] ?></option>
                                <?php
                            }
                            echo $option;
                         } else {
                            echo "<option>N/A</option>";
                         }
                       ?>
                    </select>
                </div>
            </div>
            
    </div>
</div>