
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
<?php if ($this->uri->segment(1) == 'dashboard') : ?>
 
 <script>
        window.onload = function () {

        var chartStocks = new CanvasJS.Chart("chartStocks", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: false,
            animationEnabled: true,
            // title: {
            //   text: "Desktop Browser Market Share in 2016"
            // },
            data: [{
              type: "pie",
              startAngle: 25,
              indexLabelFormatter: function(e) {
                if (e.dataPoint.y === 0)
                    return "";
                else
                    return e.dataPoint.y;
                },
              toolTipContent: "<b>{label}</b>: {y} stock",
              showInLegend: false,
              legendText: "{label}",
              indexLabelFontSize: 16,
              indexLabel: "{label} - {y}",
              dataPoints:  <?= $dataPoints ?>
          
            }]
          });
          chartStocks.render();


        // CHART BY TIME
        
        var chartStockbyDept = new CanvasJS.Chart("chartStockbyDept", {
            animationEnabled: true,
            // exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            // title:{
            // 	text: "Simple Column Chart with Index Labels"
            // },
            axisY: {
                includeZero: true
            },
            axisX: {
                interval: 1,
                labelAngle: -70 
            },
            data: [{
                type: "column", //change type to bar, line, area, pie, etc
                indexLabel: "{y} stock", //Shows y value on all Data Points
                indexLabelFontColor: "#5A5757",
                indexLabelFontSize: 12,
                dataPoints: [      
                        { y: <?= $ASN ?? 0; ?>, label: "ASN" },
                        { y: <?= $BHI ?? 0; ?>, label: "BHI" },
                        { y: <?= $BLA ?? 0; ?>, label: "BLA" },
                        { y: <?= $BLM ?? 0; ?>, label: "BLM" },
                        { y: <?= $BNH ?? 0; ?>, label: "BNH" },
                        { y: <?= $CPR ?? 0; ?>, label: "CPR" },
                        { y: <?= $DEPO ?? 0; ?>, label: "DEPO" },
                        { y: <?= $DKA ?? 0; ?>, label: "DKA" },
                        { y: <?= $FTM ?? 0; ?>, label: "FTM" },
                        { y: <?= $MHJN ?? 0; ?>, label: "MHJN" },
                        { y: <?= $LBB ?? 0; ?>, label: "LBB" },
                        { y: <?= $SNY ?? 0; ?>, label: "SNY" },
                        { y: <?= $STB ?? 0; ?>, label: "STB" },
                        { y: <?= $OTHER ?? 0; ?>, label: "OTHER" },
                    ]
            }]
            });
            chartStockbyDept.render();

            // CHART BY TIME
        
        var chartProductbyDept = new CanvasJS.Chart("chartProductbyDept", {
            animationEnabled: true,
            // exportEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            axisY: {
                includeZero: true
            },
            axisX: {
                interval: 1,
            },
            data: [{
                type: "bar", //change type to bar, line, area, pie, etc
                indexLabel: "{y} stock", //Shows y value on all Data Points
                indexLabelFontColor: "#5A5757",
                indexLabelFontSize: 12,
                dataPoints: [      
                        { y: <?= $P_ASN ?? 0; ?>, label: "ASN" },
                        { y: <?= $P_BHI ?? 0; ?>, label: "BHI" },
                        { y: <?= $P_BLA ?? 0; ?>, label: "BLA" },
                        { y: <?= $P_BLM ?? 0; ?>, label: "BLM" },
                        { y: <?= $P_BNH ?? 0; ?>, label: "BNH" },
                        { y: <?= $P_CPR ?? 0; ?>, label: "CPR" },
                        { y: <?= $P_DEPO ?? 0; ?>, label: "DEPO" },
                        { y: <?= $P_DKA ?? 0; ?>, label: "DKA" },
                        { y: <?= $P_FTM ?? 0; ?>, label: "FTM" },
                        { y: <?= $P_MHJN ?? 0; ?>, label: "MHJN" },
                        { y: <?= $P_LBB ?? 0; ?>, label: "LBB" },
                        { y: <?= $P_SNY ?? 0; ?>, label: "SNY" },
                        { y: <?= $P_STB ?? 0; ?>, label: "STB" },
                        { y: <?= $P_OTHER ?? 0; ?>, label: "OTHER" },
                    ]
            }]
            });
            chartProductbyDept.render();
        }
      </script>
<?php endif; ?>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">