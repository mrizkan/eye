<?php include('inc/header.php') ?>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php include('inc/top_bar.php') ?>
    <style>

        .button-list {
            overflow: hidden;
        }
        .col-sm-10{
            margin-top: 5px;
        }
    </style>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php $this->load->view('inc/leftbar'); ?>

    </div>

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
                            <!--<h4 class="page-title">Customer Details</h4>-->

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?php  foreach ($data["fetch_data"]->result() as $row) {    ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card-box">
                            <!-- <div class="panel-heading">
                                <h4>Invoice</h4>
                            </div> -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">

                                        <div class="pull-xs-left m-t-30">
                                            <address>

                                                <strong>Eye with us Opticals</strong><br>
                                                91B, Galle Road,<br>Henamulla,<br>Panadura.<br>
                                                <i class="fa fa-phone"></i> +94 778 280 494
                                            </address>



                                        </div>
                                        <div class="pull-xs-right m-t-30">
                                            <strong style="float: right">Date: <?php echo date("Y/m/d") ?></strong><br>
                                            <img src="<?php echo base_url(); ?>images/logo.png" width="220px" height="100px">

                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->



                                <hr>

                            </div>

                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-7 ">
                                        <label>Customer Name: &NonBreakingSpace;</label><label><?php echo $row->cname; ?></label>
                                    </div>
                                <div class="col-lg-3 ">
                                        <label>Reference Number: &NonBreakingSpace;</label><label><?php echo $row->rnum; ?></label>
                                    </div>
                                <div class="col-lg-2 ">
                                        <label>Age: &NonBreakingSpace;</label><label><?php echo $row->age; ?></label>
                                    </div>
                                </div>
                                    </div>
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <label>Address: &NonBreakingSpace;</label><label><?php echo $row->address; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>Mobile Number: &NonBreakingSpace;</label><label><?php echo $row->mobile; ?></label>
                                    </div>
                                    <div class="col-lg-5 ">
                                        <label>Remarks/Symptams: &NonBreakingSpace;</label><label><?php echo $row->remark; ?></label>
                                    </div>



                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label>Physical Condition/History: &NonBreakingSpace;</label><label><?php echo $row->history; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>U.V.A. (R):
                                            &NonBreakingSpace;</label><label><?php echo $row->uva1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>P.H. (R):
                                            &NonBreakingSpace;</label><label><?php echo $row->ph1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>U.V.A. (L):
                                            &NonBreakingSpace;</label><label><?php echo $row->uva2; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-3 ">
                                        <label>P.H. (L):
                                            &NonBreakingSpace;</label><label><?php echo $row->ph2; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>6M: &NonBreakingSpace;</label><label><?php echo $row->m6m1; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>6M: &NonBreakingSpace;</label><label><?php echo $row->m6m2; ?></label>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <label>N.P.C.: &NonBreakingSpace;</label><label><?php echo $row->npc; ?></label>
                                    </div>
                                </div>
                            </div>
                            <!--if want back button will come here-->

                        </div>

                        </div>

                    </div>
                <?php } ?>
                </div>
                <!-- end row -->



            </div>
        </div>
    </div>
    <?php include('inc/footer.php') ?>