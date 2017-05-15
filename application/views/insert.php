<?php include('inc/header.php') ?>
    <body class="fixed-left">

    <!-- Begin page -->
<div id="wrapper">

<?php include('inc/top_bar.php') ?>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Insert Customer Details</h4>
                        </div>
                        <?php
                        $noti = $this->session->flashdata('msg');
                        if (isset($noti)) {
                            ?>

                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('msg'); ?>
                            </div>

                        <?php } ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-12 ">
                                    <?= form_open('Customer/cinsert'); ?>
                                    <div class="row">
                                        <div class="col-lg-9 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Customer Name</label>
                                                <input type="text" class="form-control" required="" name="cname"
                                                       placeholder="Customer Name" data-parsley-id="34"
                                                       value="<?php echo set_value('cname'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Reference Number</label>
                                                <input data-parsley-type="number" data-parsley-maxlength="3" type="text" class="form-control" required="" name="rnum"
                                                       placeholder="Reference Number" data-parsley-id="46" data-parsley-id="56"
                                                       value="<?php echo set_value('rnum'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" class="form-control" required="" name="address"
                                                       placeholder="Address" data-parsley-id="34"
                                                       value="<?php echo set_value('address'); ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Age</label>
                                                <input type="text" class="form-control" required="" name="age"
                                                       placeholder="Age" data-parsley-id="34"
                                                       value="<?php echo set_value('age'); ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Remarks/Symptams</label>
                                                <input type="text" class="form-control" name="remark"
                                                       placeholder="Remarks/Symptams" data-parsley-id="34"
                                                       value="<?php echo set_value('remark'); ?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Physical Condition/History</label>
                                                <input type="text" class="form-control" name="history"
                                                       placeholder="Physical Condition/History" data-parsley-id="34"
                                                       value="<?php echo set_value('history'); ?>">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>


                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <h4>Refraction</h4>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">U.V.A.</label>
                                                <input type="text" class="form-control" required="" name="uva"
                                                       placeholder="U.V.A." data-parsley-id="34"
                                                       value="<?php echo set_value('uva'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">P.H.</label>
                                                <input type="text" class="form-control" required="" name="ph"
                                                       placeholder="P.H." data-parsley-id="34"
                                                       value="<?php echo set_value('ph'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">U.V.A.</label>
                                                <input type="text" class="form-control" required="" name="uva2"
                                                       placeholder="U.V.A." data-parsley-id="34"
                                                       value="<?php echo set_value('uva2'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">P.H.</label>
                                                <input type="text" class="form-control" required="" name="ph2"
                                                       placeholder="P.H." data-parsley-id="34"
                                                       value="<?php echo set_value('ph2'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">6M</label>
                                                <input type="text" class="form-control" required="" name="6m"
                                                       placeholder="6M" data-parsley-id="34"
                                                       value="<?php echo set_value('6m'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">6M</label>
                                                <input type="text" class="form-control" required="" name="6m2"
                                                       placeholder="6M" data-parsley-id="34"
                                                       value="<?php echo set_value('6m'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">N.P.C.</label>
                                                <input type="text" class="form-control" required="" name="npc"
                                                       placeholder="N.P.C." data-parsley-id="34"
                                                       value="<?php echo set_value('npc'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Version</label>
                                                <input type="text" class="form-control" required="" name="version"
                                                       placeholder="Version" data-parsley-id="34"
                                                       value="<?php echo set_value('version'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">ć-HbRx</label>
                                                <input type="text" class="form-control" required="" name="hbrx"
                                                       placeholder="ć-HbRx" data-parsley-id="34"
                                                       value="<?php echo set_value('hbrx'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1"><br></label>

                                                <input type="text" class="form-control" required="" name="hbrx1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('hbrx1'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1"><br></label>
                                                <input type="text" class="form-control" required="" name="hbrx2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('hbrx2'); ?>">
                                                <!--<small class="text-muted">We'll never share your email with anyone
                                                    else.
                                                </small>-->
                                            </fieldset>
                                        </div>

                                    </div>

                                </div><!-- end col -->


                            </div><!-- end row -->
                        </div>


                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <h4>THE PRESCRIPTION</h4>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1" style="margin-left: 49%">R</label>
                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="DIST">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1"><br></label>
                                                <input type="text" class="form-control" name="r1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('r2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Sph:</label>
                                                <input type="text" class="form-control" name="sph1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('sph1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Cyl:</label>
                                                <input type="text" class="form-control" name="cyl1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('cyl1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Axis:</label>
                                                <input type="text" class="form-control" name="axis1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('axis1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Sph:</label>
                                                <input type="text" class="form-control" name="sph2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('sph2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Cyl:</label>
                                                <input type="text" class="form-control" name="cyl2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('cyl2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Axis:</label>
                                                <input type="text" class="form-control" name="axis2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('axis2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1" style="margin-left: 49%">L</label>
                                                <input type="text" class="form-control" name="l1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('l2'); ?>">

                                            </fieldset>

                                        </div>


                                        <!-- second row-->
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="NEAR">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="r2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('r2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="sph3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('sph3'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cyl3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('cyl3'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="axis3"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('axis3'); ?>">

                                            </fieldset>

                                        </div>

                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="sph4"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('sph4'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cyl4"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('cyl4'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-1 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="axis4"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('axis4'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="l2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('l2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-4 ">
                                        </div>
                                        <div class="col-lg-4 ">
                                        <small class="text-muted">Ophthalmoscope/ Slit Lamp Microscope
                                        </small>
                                        </div>
                                        <div class="col-lg-4 ">
                                        </div>


                                    </div>

                                </div><!-- end col -->


                            </div><!-- end row -->
                        </div>

                        <!--next cardbord box-->
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Cornea">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cornea1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('cornea1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="cornea2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('cornea2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Iris">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iris1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('iris1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iris2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('iris2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Media">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="media1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('media1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="media2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('media2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1"><br></label>
                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="Fundus">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="description" name="fundus1"
                                                          rows="3" placeholder=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="description" name="fundus2"
                                                          rows="3" placeholder=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="A/C">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="ac1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('ac1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="ac2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('ac2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="P/C">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="pc1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('pc1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="pc2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('pc2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-2 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="READONLY"
                                                       placeholder="" data-parsley-id="34" readonly
                                                       value="I.O.P.">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iop1"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('iop1'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-5 ">
                                            <fieldset class="form-group">

                                                <input type="text" class="form-control" name="iop2"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('iop2'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-12 ">
                                        <small class="text-muted">Diagnosis/Remarks
                                        </small>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="description" name="remarks"
                                                          rows="3" placeholder=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Lense Model</label>
                                                <input type="text" class="form-control" name="lense"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('lense'); ?>">

                                            </fieldset>

                                        </div>
                                        <div class="col-lg-6 ">
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Total Amount</label>
                                                <input type="text" class="form-control" name="total"
                                                       placeholder="" data-parsley-id="34"
                                                       value="<?php echo set_value('total'); ?>">

                                            </fieldset>

                                        </div>




                                    </div>
                                    <button type="submit" class="btn btn-primary" style="float: right">Insert</button>
                                    <?php echo form_close(); ?>
                                </div><!-- end col -->


                            </div><!-- end row -->
                        </div>


                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <!-- end row -->


                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <!-- End content-page -->


<?php include('inc/footer.php') ?>