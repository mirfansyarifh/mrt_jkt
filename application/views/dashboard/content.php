<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $title ?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/konfigurasi/mrt-logo.ico')?>"/>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <script>
        window.onload = function () {

        var chartInOut = new CanvasJS.Chart("chartInOut", {
            animationEnabled: true,
            // title:{
            //     text: "Transaksi In dan Out Departemen",
            // },	
            axisY: {
                title: "Transaksi In",
                titleFontColor: "#4F81BC",
                lineColor: "#4F81BC",
                labelFontColor: "#4F81BC",
                tickColor: "#4F81BC"
            },
            axisY2: {
                title: "Transaksi Out",
                titleFontColor: "#C0504E",
                lineColor: "#C0504E",
                labelFontColor: "#C0504E",
                tickColor: "#C0504E"
            },	
            toolTip: {
                shared: true
            },
            legend: {
                cursor:"pointer",
                itemclick: toggleDataSeries
            },
            data: [{
                type: "column",
                name: "Proven Oil Reserves (bn)",
                legendText: "Proven Oil Reserves",
                showInLegend: true, 
                dataPoints:[
                    { label: "Saudi", y: 266.21 },
                    { label: "Venezuela", y: 302.25 },
                    { label: "Iran", y: 157.20 },
                    { label: "Iraq", y: 148.77 },
                    { label: "Kuwait", y: 101.50 },
                    { label: "UAE", y: 97.8 },
                    { label: "UAE", y: 97.8 },
                    { label: "UAE", y: 97.8 },
                    { label: "UAE", y: 97.8 },
                    { label: "UAE", y: 97.8 },
                    { label: "UAE", y: 97.8 },
                    { label: "UAE", y: 97.8 },
                ]
            },
            {
                type: "column",	
                name: "Oil Production (million/day)",
                legendText: "Oil Production",
                axisYType: "secondary",
                showInLegend: true,
                dataPoints:[
                    { label: "Saudi", y: 10.46 },
                    { label: "Venezuela", y: 2.27 },
                    { label: "Iran", y: 3.99 },
                    { label: "Iraq", y: 4.45 },
                    { label: "Kuwait", y: 2.92 },
                    { label: "UAE", y: 3.1 },
                    { label: "UAE", y: 3.1 },
                    { label: "UAE", y: 3.1 },
                    { label: "UAE", y: 3.1 },
                    { label: "UAE", y: 3.1 },
                    { label: "UAE", y: 3.1 },
                    { label: "UAE", y: 3.1 },
                ]
            }]
        });
        chartInOut.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            }
            else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }
        // CHART BY TIME

        var chartByTime = new CanvasJS.Chart("chartByTime", {
        title: {
            text: "House Median Price"
        },
        axisX: {
            valueFormatString: "MMM YYYY"
        },
        axisY2: {
            title: "Median List Price",
            prefix: "$",
            suffix: "K"
        },
        toolTip: {
            shared: true
        },
        legend: {
            cursor: "pointer",
            verticalAlign: "top",
            horizontalAlign: "center",
            dockInsidePlotArea: true,
            itemclick: toogleDataSeries
        },
        data: [{
            type:"line",
            axisYType: "secondary",
            name: "San Fransisco",
            showInLegend: true,
            markerSize: 0,
            yValueFormatString: "$#,###k",
            dataPoints: [		
                { x: new Date(2014, 00, 01), y: 850 },
                { x: new Date(2014, 01, 01), y: 889 },
                { x: new Date(2014, 02, 01), y: 890 },
                { x: new Date(2014, 03, 01), y: 899 },
                { x: new Date(2014, 04, 01), y: 903 },
                { x: new Date(2014, 05, 01), y: 925 },
                { x: new Date(2014, 06, 01), y: 899 },
                { x: new Date(2014, 07, 01), y: 875 },
                { x: new Date(2014, 08, 01), y: 927 },
                { x: new Date(2014, 09, 01), y: 949 },
                { x: new Date(2014, 10, 01), y: 946 },
                { x: new Date(2014, 11, 01), y: 927 },
                { x: new Date(2015, 00, 01), y: 950 },
                { x: new Date(2015, 01, 01), y: 998 },
                { x: new Date(2015, 02, 01), y: 998 },
                { x: new Date(2015, 03, 01), y: 1050 },
                { x: new Date(2015, 04, 01), y: 1050 },
                { x: new Date(2015, 05, 01), y: 999 },
                { x: new Date(2015, 06, 01), y: 998 },
                { x: new Date(2015, 07, 01), y: 998 },
                { x: new Date(2015, 08, 01), y: 1050 },
                { x: new Date(2015, 09, 01), y: 1070 },
                { x: new Date(2015, 10, 01), y: 1050 },
                { x: new Date(2015, 11, 01), y: 1050 },
                { x: new Date(2016, 00, 01), y: 995 },
                { x: new Date(2016, 01, 01), y: 1090 },
                { x: new Date(2016, 02, 01), y: 1100 },
                { x: new Date(2016, 03, 01), y: 1150 },
                { x: new Date(2016, 04, 01), y: 1150 },
                { x: new Date(2016, 05, 01), y: 1150 },
                { x: new Date(2016, 06, 01), y: 1100 },
                { x: new Date(2016, 07, 01), y: 1100 },
                { x: new Date(2016, 08, 01), y: 1150 },
                { x: new Date(2016, 09, 01), y: 1170 },
                { x: new Date(2016, 10, 01), y: 1150 },
                { x: new Date(2016, 11, 01), y: 1150 },
                { x: new Date(2017, 00, 01), y: 1150 },
                { x: new Date(2017, 01, 01), y: 1200 },
                { x: new Date(2017, 02, 01), y: 1200 },
                { x: new Date(2017, 03, 01), y: 1200 },
                { x: new Date(2017, 04, 01), y: 1190 },
                { x: new Date(2017, 05, 01), y: 1170 }
            ]
        },
        {
            type: "line",
            axisYType: "secondary",
            name: "Manhattan",
            showInLegend: true,
            markerSize: 0,
            yValueFormatString: "$#,###k",
            dataPoints: [
                { x: new Date(2014, 00, 01), y: 1200 },
                { x: new Date(2014, 01, 01), y: 1200 },
                { x: new Date(2014, 02, 01), y: 1190 },
                { x: new Date(2014, 03, 01), y: 1180 },
                { x: new Date(2014, 04, 01), y: 1250 },
                { x: new Date(2014, 05, 01), y: 1270 },
                { x: new Date(2014, 06, 01), y: 1300 },
                { x: new Date(2014, 07, 01), y: 1300 },
                { x: new Date(2014, 08, 01), y: 1358 },
                { x: new Date(2014, 09, 01), y: 1410 },
                { x: new Date(2014, 10, 01), y: 1480 },
                { x: new Date(2014, 11, 01), y: 1500 },
                { x: new Date(2015, 00, 01), y: 1500 },
                { x: new Date(2015, 01, 01), y: 1550 },
                { x: new Date(2015, 02, 01), y: 1550 },
                { x: new Date(2015, 03, 01), y: 1590 },
                { x: new Date(2015, 04, 01), y: 1600 },
                { x: new Date(2015, 05, 01), y: 1590 },
                { x: new Date(2015, 06, 01), y: 1590 },
                { x: new Date(2015, 07, 01), y: 1620 },
                { x: new Date(2015, 08, 01), y: 1670 },
                { x: new Date(2015, 09, 01), y: 1720 },
                { x: new Date(2015, 10, 01), y: 1750 },
                { x: new Date(2015, 11, 01), y: 1820 },
                { x: new Date(2016, 00, 01), y: 2000 },
                { x: new Date(2016, 01, 01), y: 1920 },
                { x: new Date(2016, 02, 01), y: 1750 },
                { x: new Date(2016, 03, 01), y: 1850 },
                { x: new Date(2016, 04, 01), y: 1750 },
                { x: new Date(2016, 05, 01), y: 1730 },
                { x: new Date(2016, 06, 01), y: 1700 },
                { x: new Date(2016, 07, 01), y: 1730 },
                { x: new Date(2016, 08, 01), y: 1720 },
                { x: new Date(2016, 09, 01), y: 1740 },
                { x: new Date(2016, 10, 01), y: 1750 },
                { x: new Date(2016, 11, 01), y: 1750 },
                { x: new Date(2017, 00, 01), y: 1750 },
                { x: new Date(2017, 01, 01), y: 1770 },
                { x: new Date(2017, 02, 01), y: 1750 },
                { x: new Date(2017, 03, 01), y: 1750 },
                { x: new Date(2017, 04, 01), y: 1730 },
                { x: new Date(2017, 05, 01), y: 1730 }
            ]
        },
        {
            type: "line",
            axisYType: "secondary",
            name: "Seatle",
            showInLegend: true,
            markerSize: 0,
            yValueFormatString: "$#,###k",
            dataPoints: [
                { x: new Date(2014, 00, 01), y: 409 },
                { x: new Date(2014, 01, 01), y: 415 },
                { x: new Date(2014, 02, 01), y: 419 },
                { x: new Date(2014, 03, 01), y: 429 },
                { x: new Date(2014, 04, 01), y: 429 },
                { x: new Date(2014, 05, 01), y: 450 },
                { x: new Date(2014, 06, 01), y: 450 },
                { x: new Date(2014, 07, 01), y: 445 },
                { x: new Date(2014, 08, 01), y: 450 },
                { x: new Date(2014, 09, 01), y: 450 },
                { x: new Date(2014, 10, 01), y: 440 },
                { x: new Date(2014, 11, 01), y: 429 },
                { x: new Date(2015, 00, 01), y: 435 },
                { x: new Date(2015, 01, 01), y: 450 },
                { x: new Date(2015, 02, 01), y: 475 },
                { x: new Date(2015, 03, 01), y: 475 },
                { x: new Date(2015, 04, 01), y: 475 },
                { x: new Date(2015, 05, 01), y: 489 },
                { x: new Date(2015, 06, 01), y: 495 },
                { x: new Date(2015, 07, 01), y: 495 },
                { x: new Date(2015, 08, 01), y: 500 },
                { x: new Date(2015, 09, 01), y: 508 },
                { x: new Date(2015, 10, 01), y: 520 },
                { x: new Date(2015, 11, 01), y: 525 },
                { x: new Date(2016, 00, 01), y: 525 },
                { x: new Date(2016, 01, 01), y: 529 },
                { x: new Date(2016, 02, 01), y: 549 },
                { x: new Date(2016, 03, 01), y: 550 },
                { x: new Date(2016, 04, 01), y: 568 },
                { x: new Date(2016, 05, 01), y: 575 },
                { x: new Date(2016, 06, 01), y: 579 },
                { x: new Date(2016, 07, 01), y: 575 },
                { x: new Date(2016, 08, 01), y: 585 },
                { x: new Date(2016, 09, 01), y: 589 },
                { x: new Date(2016, 10, 01), y: 595 },
                { x: new Date(2016, 11, 01), y: 595 },
                { x: new Date(2017, 00, 01), y: 595 },
                { x: new Date(2017, 01, 01), y: 600 },
                { x: new Date(2017, 02, 01), y: 624 },
                { x: new Date(2017, 03, 01), y: 635 },
                { x: new Date(2017, 04, 01), y: 650 },
                { x: new Date(2017, 05, 01), y: 675 }
            ]
        },
        {
            type: "line",
            axisYType: "secondary",
            name: "Los Angeles",
            showInLegend: true,
            markerSize: 0,
            yValueFormatString: "$#,###k",
            dataPoints: [
                { x: new Date(2014, 00, 01), y: 529 },
                { x: new Date(2014, 01, 01), y: 540 },
                { x: new Date(2014, 02, 01), y: 539 },
                { x: new Date(2014, 03, 01), y: 565 },
                { x: new Date(2014, 04, 01), y: 575 },
                { x: new Date(2014, 05, 01), y: 579 },
                { x: new Date(2014, 06, 01), y: 589 },
                { x: new Date(2014, 07, 01), y: 579 },
                { x: new Date(2014, 08, 01), y: 579 },
                { x: new Date(2014, 09, 01), y: 579 },
                { x: new Date(2014, 10, 01), y: 569 },
                { x: new Date(2014, 11, 01), y: 525 },
                { x: new Date(2015, 00, 01), y: 535 },
                { x: new Date(2015, 01, 01), y: 575 },
                { x: new Date(2015, 02, 01), y: 599 },
                { x: new Date(2015, 03, 01), y: 619 },
                { x: new Date(2015, 04, 01), y: 639 },
                { x: new Date(2015, 05, 01), y: 648 },
                { x: new Date(2015, 06, 01), y: 640 },
                { x: new Date(2015, 07, 01), y: 645 },
                { x: new Date(2015, 08, 01), y: 648 },
                { x: new Date(2015, 09, 01), y: 649 },
                { x: new Date(2015, 10, 01), y: 649 },
                { x: new Date(2015, 11, 01), y: 649 },
                { x: new Date(2016, 00, 01), y: 650 },
                { x: new Date(2016, 01, 01), y: 665 },
                { x: new Date(2016, 02, 01), y: 675 },
                { x: new Date(2016, 03, 01), y: 695 },
                { x: new Date(2016, 04, 01), y: 690 },
                { x: new Date(2016, 05, 01), y: 699 },
                { x: new Date(2016, 06, 01), y: 699 },
                { x: new Date(2016, 07, 01), y: 699 },
                { x: new Date(2016, 08, 01), y: 699 },
                { x: new Date(2016, 09, 01), y: 699 },
                { x: new Date(2016, 10, 01), y: 709 },
                { x: new Date(2016, 11, 01), y: 699 },
                { x: new Date(2017, 00, 01), y: 700 },
                { x: new Date(2017, 01, 01), y: 700 },
                { x: new Date(2017, 02, 01), y: 724 },
                { x: new Date(2017, 03, 01), y: 739 },
                { x: new Date(2017, 04, 01), y: 749 },
                { x: new Date(2017, 05, 01), y: 740 }
            ]
        }]
    });
    chartByTime.render();

    function toogleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else{
            e.dataSeries.visible = true;
        }
        chartByTime.render();
    }

    // CHART BY CATEGORY
    var chartByCategory = new CanvasJS.Chart("chartByCategory", {
	animationEnabled: true,
	title:{
		text: "Email Categories",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 67, label: "Inbox" },
			{ y: 28, label: "Archives" },
			{ y: 10, label: "Labels" },
			{ y: 7, label: "Drafts"},
			{ y: 15, label: "Trash"},
			{ y: 6, label: "Spam"}
		]
	}]
});
chartByCategory.render();

        }
      </script>
   </head>
   <body class="hold-transition sidebar-mini sidebar-collapse">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
               </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle  " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle fa-fw"></i>
                  <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?> </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="<?php echo base_url('/login/logout') ?>" >Logout</a>
                  </div>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('dashboard') ?>" class="brand-link">
               <!-- <img src="<?php echo base_url('assets/upload/konfigurasi/mrt-logo.png')?>"
                  alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3"
                  style="opacity: .8"> -->
               <span class="brand-text font-weight-light" style="padding-left: 45px">MRT JKT</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                     <li class="nav-header" style="padding-left: 20px" >DATA MASTER</li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
                           <i class="fa fa-chart-pie nav-icon"></i>
                           <p>DASHBOARD</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('products') ?>" class="nav-link">
                           <i class="fa fa-folder nav-icon"></i>
                           <p>PRODUK</p>
                        </a>
                     </li>
                     </li>
                     <li class="nav-header" style="padding-left: 20px" >TRANSAKSI MASTER</li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('transactions/transOpen') ?>" class="nav-link">
                           <i class="fa fa-folder-open nav-icon"></i>
                           <p>TRANSAKSI OPEN</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('transactions/transIn') ?>" class="nav-link">
                           <i class="fa fa-folder-open nav-icon"></i>
                           <p>TRANSAKSI IN</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('transactions/transOut') ?>" class="nav-link">
                           <i class="fa fa-folder-open nav-icon"></i>
                           <p>TRANSAKSI OUT</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?php echo base_url('transactions/transConsign') ?>" class="nav-link">
                           <i class="fa fa-folder-open nav-icon"></i>
                           <p>TRANSAKSI CONSIGN  </p>
                        </a>
                     </li>
                     </li>
                     <?php 
                        if ($this->session->userdata('akses_level') == 'admin'){
                          echo '<li class="nav-item has-treeview menu">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-wrench"></i>
                                <p>
                                  SETTING
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>';
                          echo '<ul class="nav nav-treeview">';
                          echo ' <li class="nav-item">';
                          echo ' <a href="';
                          echo base_url('backend/account');
                          echo '" class="nav-link">';
                          echo ' <i class="fa fa-user nav-icon"></i>
                          <p>Account</p>
                        </a>';
                        
                          echo ' </li>';
                          echo '</ul>';
                          echo ' </li>';
                        }
                        
                        ?> 
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Main content -->
            <section class="content" style="padding-top: 20px">
               <div class="row" style="padding: 5px 25px 25px 0px">
                  <div class="col-12">
                     <!-- ----------------- -->
                           <div class="card shadow mb-4 card-primary ">
                              <div class="card-header">
                              <h3 class="card-title"> Transaksi In dan Out Departemen</h3>
                                 <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                 </div>
                              </div>
                              <div class="card-body">
                                <div id="chartInOut" style="height: 370px; width: 100%;"></div>
                              </div>
                           </div>
                     <!-- ----------------- -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->    
         <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
               <a>All rights
               reserved.</a>
            </div>
            <strong>Copyright &copy; 2021 <a href="<?php echo base_url('dashboard') ?>">MRT Jakarta</a>.</strong> 
         </footer>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo base_url() ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url() ?>assets/canvasjs/canvasjs.min.js"></script>
      <!-- DataTables -->
      <script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables/jquery.dataTables.js"></script>
      <script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url() ?>assets/adminlte/dist/js/demo.js"></script>
      
   </body>
</html>