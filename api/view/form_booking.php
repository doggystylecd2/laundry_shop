<?php 
    require '../../vendor/autoload.php';
    $repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
    ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
    ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
    ->immutable()
    ->make();

    $dotenv = Dotenv\Dotenv::create($repository, '../../');
    $dotenv->load();
    include("../../database/connection.php");
        
    $db = new DatabaseClass();

    // echo print_r($_POST);
?>
<div id="parcel_details">
    <input type="hidden" name="shop_id" id="shop_id"  class="form-control-sm form-control" value="<?php echo $_POST['shopid'] ?>">
    <div class="col-lg-12" style="font-size: 12px !important;">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select_services" class="form-control-label">Select Services</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="select_services" id="select_services" class="form-control-sm form-control" required>
                        <option disabled selected>-- Please select --</option>
                        <?php 
                        $data = $db->Select("SELECT * FROM type_of_services INNER JOIN shops_services USING(services_id) where type = 0 and shop_id = ? order by name asc  ", array($_POST['shopid']));
                         $option = '';
                         if(count($data) > 0) {
                            foreach ($data as $key => $value) {
                                ?>
                                <option value="<?php echo $value["shop_services_id"] ?>"><?php echo $value["name"] ?></option>
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
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="date_time_to_pickup" class="form-control-label">Date and Time to Pick-up</label>
                </div>
                <div class="col-12 col-md-9">
                   <input type="datetime-local" name="date_time_to_pickup" id="date_time_to_pickup"  class="form-control-sm form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="address_to_picup" class=" form-control-label">Pick-up Address</label>
                </div>
                <div class="col-12 col-md-9">
                   <input type="text" name="address_to_picup" id="address_to_picup"  class="form-control-sm form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Contact #:</label>
                </div>
                <div class="col-12 col-md-9">
                     <input type="text" name="contact_no" id="contact_no"  class="form-control-sm form-control">
                </div>
            </div>
            
    </div>
</div>