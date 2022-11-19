 <div id="modalUser" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="false" >
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <div class="stepwizard" >
             <div class="stepwizard-row setup-panel">
               <div class="stepwizard-step">
                 <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                 <p>User Information</p>
               </div>
               <div class="stepwizard-step">
                 <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                 <p>Address</p>
               </div>
               <div class="stepwizard-step">
                 <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                 <p>User Account</p>
               </div>
               <div class="stepwizard-step">
                 <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                 <p>Shop Information</p>
               </div>
               <div class="stepwizard-step">
                 <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                 <p>Documents</p>
               </div>
             </div>
           </div>
         </div>
         <div class="modal-body">
           <div class="container" style="width:100%;">



             <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="driverForm" enctype="multipart/form-data">
               <div class="row setup-content" id="step-1">
                 <div class="col-md-12 ">
                   <div class="col-md-12">
                     <h3> Step 1</h3>
                     <div class="form-group">
                       <label class="control-label">First Name</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="Enter First Name" type="text" name="first_name" value="<?php echo $first_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Last Name</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="Enter Last Name" type="text" name="last_name" value="<?php echo $last_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Middle Name</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="Enter Middle Name" type="text" name="middle_name" value="<?php echo $middle_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Contact No.</label>
                       <input maxlength="12" required="required" class="form-control" placeholder="Enter Mobile Number" type="text" name="contact_no" value="<?php echo $contact_no ?>">
                     </div>
                     
                   </div>
                   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                 </div>
               </div>

               <div class="row setup-content" id="step-2">
                 <div class="col-xs-12">
                   <div class="col-md-12">
                     <h3> Step 2</h3>
                     <div class="form-group">
                       <label class="control-label">City</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="San Fernando City" disabled >
                     </div>
                     <div class="form-group">
                       <label class="control-label">Province</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="La Union" disabled >
                     </div>
                     <div class="form-group">
                       <label class="control-label">Zip Code</label>
                       <input maxlength="100" required="required" class="form-control" placeholder="2500" disabled >
                     </div>
                     <div class="form-group">
                        <label class="control-label">District</label>
                        <select name="list_barangay" id="list-barangay" class="form-control" required="required">
                           <?php 
                             $db = new DatabaseClass();
                             $data = $db->Select("SELECT * FROM barangay order by name asc  ");
                             $option = '';
                             if(count($data) > 0) {
                                foreach ($data as $key => $value) {
                                    if($value["barangay_id"] == $list_barangay) {
                                      $option .= "<option value='".$value["barangay_id"]."' selected>".$value["name"]."</option>";
                                    } else {
                                      $option .= "<option value='".$value["barangay_id"]."'>".$value["name"]."</option>";
                                    }
                                    
                                }
                                echo $option;
                             } else {
                                echo "<option>N/A</option>";
                             }
                            ?>
                        </select>
                    </div>
                     <div class="form-group">
                        <label class="control-label">Barangay</label>
                        <input class="form-control" type="text" name="zone_number" id="zone_number" placeholder="Barangay" required="required" name="barangay" value="<?php echo $zone_number ?>">
                    </div>
                     <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                   </div>
                 </div>
               </div>

               <div class="row setup-content" id="step-3">
                 <div class="col-xs-12">
                   <div class="col-md-12">
                     <h3> Step 3</h3>
                     <div class="form-group">
                       <label class="control-label">Username</label>
                       <input  required="required" class="form-control" placeholder="Enter Username" type="text" name="username" value="<?php echo $username ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Email</label>
                       <input  required="required" class="form-control" placeholder="Enter Email" type="text" name="email" value="<?php echo $email ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Password</label>
                       <input  required="required" class="form-control"  type="password" name="password" value="<?php echo $password ?>">
                     </div>
                     <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                   </div>
                 </div>
               </div>

               <div class="row setup-content" id="step-4">
                 <div class="col-xs-12">
                   <div class="col-md-12">
                     <h3> Step 4</h3>
                     <div class="form-group">
                       <label class="control-label">Shop Name</label>
                       <input  required="required" class="form-control" placeholder="Enter Shop Name" type="text" name="shop_name" value="<?php echo $shop_name ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Descriptions</label>
                       <input  required="required" class="form-control" placeholder="Enter Shop Descriptions" type="text" name="shop_descriptions" value="<?php echo $shop_descriptions ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Owner</label>
                       <input  required="required" class="form-control" placeholder="Enter Shop Owner" type="text" name="shop_owner" value="<?php echo $shop_owner ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Upload Shop Logo : Supported File extension (jpeg, png,jpg)</label>
                       <input  required="required" class="form-control" type="file" id="file-logo" name="file-logo">
                     </div>
                     <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                     <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                   </div>
                 </div>
               </div>

               <div class="row setup-content" id="step-5">
                 <div class="col-xs-12">
                   <div class="col-md-12">
                     <h3> Step 5</h3>
                     <div class="form-group">
                       <label class="control-label">Business ID</label>
                       <input  required="required" class="form-control" placeholder="Enter Shop Name" type="text" name="shop_bussiness_id" value="<?php echo $shop_bussiness_id ?>">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Upload Business Permit</label>
                       <input  required="required" class="form-control" type="file" id="file-permit" name="file-permit">
                     </div>
                     
                     <?php echo $message; ?>
                     <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                     <input class="btn btn-primary  btn-lg pull-right" type="submit" name="shop_register" value="submit" />
                   </div>
                 </div>
               </div>

             </form>

           </div>
         </div>
         <div class="modal-footer">
         </div>
       </div>
       <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
   </div>