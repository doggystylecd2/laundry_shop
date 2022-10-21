<div class="page-wrapper">
    
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
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Homepage</li>
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
        
        <div class="col-lg-12" style="margin-top:20px;">
            <div class="card">
                <div class="card-header">Add Parcel</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Sender Information</h3>
                    </div>
                    <hr>
                    <form action="" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Name:</label>
                            <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" disabled>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Address</label>
                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" disabled>
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Recipient number</label>
                            <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number">
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Parcel Description</label>
                            <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number">
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Contact NO.</label>
                            <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number">
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Weight</label>
                            <!-- <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number"> -->
                            <select name="weight" id="weight" class="form-control cc-number identified visa">
                                <option value=""></option>
                            </select>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div>
                        <div class="card-title">
                            <h3 class="text-center title-2">Receiver Information</h3>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Name:</label>
                            <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" >
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Address</label>
                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" >
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="card-title">
                            <h3 class="text-center title-2">Delivery Information</h3>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Name:</label>
                            <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" >
                        </div>
                        <div class="form-group">
                            <label for="cc-number" class="control-label mb-1">Type</label>
                            <!-- <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                autocomplete="cc-number"> -->
                            <select name="weight" id="weight" class="form-control cc-number identified visa">
                                <option value=""></option>
                            </select>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                <span id="payment-button-amount">Submit</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
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

