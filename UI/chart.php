<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Charts</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Automated Psychiatric Diagnosis</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src="http://code.highcharts.com/highcharts.js"></script>
<script type='text/javascript' src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">


$(window).load(function(){

$(function () {
    $('#container').highcharts({
        title: {
            text: 'Patient Psychiatric Analysis Report'
        },


        credits: {
            enabled: false
        },


        xAxis: {
            categories: ['Anxiety','Depression']
        },
        labels: {
            items: [{
                html: 'Total Disease Statistics',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'Low',
            data: [1,3]
        }, {
            type: 'column',
            name: 'Moderate',
            data: [5,5.5]
        }, {
            type: 'column',
            name: 'High',
            data: [6,7]
        }, {
            type: 'column',
            name: 'Very High',
            data: [9.5,10]
        }, 
        
       
        
        {
            type: 'spline',
            name: 'Average Range',
            data: [5.37, 6.37],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }, {
            type: 'pie',
            name: 'Total Severity Detection',
            data: [{
                name: 'Low',
                y: 4,
                color: Highcharts.getOptions().colors[0] // Low
            }, {
                name: 'Moderate',
                y: 10.5,
                color: Highcharts.getOptions().colors[1] // Moderate
            }, {
                name: 'High',
                y: 13,
                color: Highcharts.getOptions().colors[2] // High
            }, {
                name: 'Very High',
                y: 19.5,
                color: Highcharts.getOptions().colors[3] // Very High
            },  
            ],
            center: [100, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});





}); // Closes window.load



</script>
</head>
<body bgcolor="#3AA4D1" ng-app="">>
<br><br><br><br><br><br><br><br>

<div id="container" style="min-width: 410px; height: 500px; margin: 0 auto"></div>


  
  

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script></span>

  <div ng-include='"templates/header.php"'></div>
 

</body>
</html> 
