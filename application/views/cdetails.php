<?php include('inc/header.php') ?>
    <body class="fixed-left">

    <!-- Begin page -->
<div id="wrapper">

<?php include('inc/top_bar.php') ?>


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
                            <h4 class="page-title">Customer Details</h4>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

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
                                                <img src="<?php echo base_url(); ?>images/logo.png" width="80px" height="40px"><br>
                                                <strong>Eye with us Opticals</strong><br>
                                                91B, Galle Road,<br>
                                                Henamulla,<br>
                                                Panadura.<br>
                                                <i class="fa fa-phone"></i> +94 778 280 494
                                            </address>
                                        </div>
                                        <div class="pull-xs-right m-t-30">
                                            <p><strong>Date: </strong><?php echo date("Y/m/d") ?></p>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->



                                <hr>
                                <div class="hidden-print">
                                    <div class="pull-xs-right">
                                        <a href="javascript:window.print()"
                                           class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <!-- End content-page -->

<?php include('inc/footer.php') ?>