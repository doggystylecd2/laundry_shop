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
     <?php include('./admin/side_bar.php');?>
    <!-- END SIDE BAR MOBILE AND DESKTOP -->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
            <?php include('./pages/header_account.php') ?>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5">Pending Courier</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="table_list">
                                        <thead>
                                            <tr>
                                                <th>email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $user_to_verify = $db->select("SELECT *, (case when user_type = 3 then 'Courier' else 'Shop' end ) as `type` FROM users where `verify` = 0 and user_type in (3)");
                                                if(count($user_to_verify) > 0){
                                                    foreach ($user_to_verify as $key => $value) {
                                                        ?>
                                                        <tr class="tr-shadow">
                                                            <td>
                                                                <?php echo $value["email"]; ?>
                                                            </td>
                                                            <td>
                                                            <div class="table-data-feature">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View" type="button"  id="<?php echo $value["user_id"]; ?>" name="view_details" name="view" onclick="showModal(this.id,this.name)">
                                                                    <i class="zmdi zmdi-eye" style="color:#298afe;"></i> 
                                                                    
                                                                </button>
                                                                 <button class="item" data-toggle="tooltip" data-placement="top" title="Resume" type="button"  id="<?php echo $value["user_id"]; ?>"  name="view_resume"  onclick="showdResumen('https://docs.google.com/viewer?url=http://calibre-ebook.com/downloads/demos/demo.docx&embedded=true',this.name)">
                                                                   <i class="zmdi zmdi-file" style="color:#298afe;"></i> 
                                                                    
                                                                </button>
                                                                 <button class="item" data-toggle="tooltip" data-placement="top" title="Driver License" type="button"  id="<?php echo $value["user_id"]; ?>" name="view_driver"  onclick="showModal(this.id,this.name)">
                                                                   <i class="zmdi zmdi-card" style="color:#298afe;"></i> 
                                                                    
                                                                </button>
                                                                 <button class="item" data-toggle="tooltip" data-placement="top" title="Confirm" type="button" name="confirm"  id="<?php echo $value["user_id"]; ?>" onclick="showModal(this.id,this.name)">
                                                                   <i class="zmdi zmdi-check-circle" style="color:green;"></i> 
                                                                    
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
            <div class="modal-body" id="parcel_modal_body">
                <div id="parcel_details"></div>
            </div>
            
        </div>
    </div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    
    <div class="content">
        <div class="embed-container">
           <iframe src=""  frameborder="0"  onload="resizeIframe(this)" id="documentsDetails"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" loading="lazy" style="height: 1300px;">
             </iframe>
       </div>
    </div>

  </div>

</div>


<script>

    function showModal(user_id,name){
    //    $('#scrollmodal').toggle();
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Details</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/routes.php",
            {user_id: user_id,action:"getdetailsUserPending", type: 'admin', name: name},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append(data);
            }
        );
    }

    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
      }


    function showdResumen(documentDetails, getID){
        // // Get the modal
        document.getElementById("documentsDetails").src = '';
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        // // Get the button that opens the modal
        var btn = document.getElementById(getID);

        // // When the user clicks on the button, open the modal
        document.getElementById("documentsDetails").src = documentDetails;
        document.getElementById("documentsDetails").style.height = "1363px";
    }

    function closeModal(){
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

</script>